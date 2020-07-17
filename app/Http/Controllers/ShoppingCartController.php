<?php

namespace App\Http\Controllers;

use App\Order_Detail;
use App\Product;
use App\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShoppingCartController extends MenuController
{
    public function index()
    {
        $shopping    = \Cart::content();
        $menu_parent = self::getMenus();
        $viewData    = [
            'title_page'  => 'Danh sách giỏ hàng',
            'shopping'    => $shopping,
            'menu_parent' => $menu_parent
        ];
        return view('frontend.cart', $viewData);
    }

    /**
     * Thêm giỏ hàng
     * */
    public function add($id)
    {
        $product = Product::find($id);
        //1. Kiểm tra tồn tại sản phẩm
        if (!$product) return redirect()->to('/');

        // 2. Kiểm tra số lượng sản phẩm
        if ($product->quantities < 1) {
            //4. Thông báo
            \Session::flash('toastr', [
                'type'    => 'error',
                'message' => 'Số lượng sản phẩm không đủ'
            ]);

            return redirect()->back();
        }
        $cart          = \Cart::content();
        $idCartProduct = $cart->search(function ($cartItem) use ($product) {
            if ($cartItem->id == $product->id) return $cartItem->id;
        });

        if ($idCartProduct) {
            $productByCart = \Cart::get($idCartProduct);
            if ($product->quantities < ($productByCart->qty + 1)) {
                \Session::flash('toastr', [
                    'type'    => 'error',
                    'message' => 'Số lượng sản phẩm không đủ'
                ]);
                return redirect()->back();
            }
        }

        // 3. Thêm sản phẩm vào giỏ hàng
        \Cart::add([
            'id'      => $product->id,
            'name'    => $product->name,
            'qty'     => 1,
            'price'   => $product->price,
            'weight'  => '1',
            'options' => [
                'image' => $product->image
            ]
        ]);

        //4. Thông báo
        \Session::flash('toastr', [
            'type'    => 'success',
            'message' => 'Thêm giỏ hàng thành công'
        ]);

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        if ($request->ajax()) {

            //1.Lấy tham số
            $qty       = $request->qty ?? 1;
            $idProduct = $request->idProduct;
            $product   = Product::find($idProduct);

            //2. Kiểm tra tồn tại sản phẩm
            if (!$product) return response(['messages' => 'Không tồn tại sản sản phẩm cần update']);

            //3. Kiểm tra số lượng sản phẩm còn ko
            if ($product->quantities < $qty) {
                return response([
                    'messages' => 'Số lượng cập nhật không đủ',
                    'error'    => true
                ]);
            }

            //4. Update
            \Cart::update($id, $qty);

            return response([
                'messages'   => 'Cập nhật thành công',
                'totalMoney' => \Cart::subtotal(0),
                'totalItem'  => number_format($product->price * $qty, 0, ',', '.')
            ]);
        }
    }

    public function deleteAll()
    {
        \Cart::destroy();

        return redirect()->route('client.home');
    }

    public function saveTransaction(Request $request)
    {
        $totalMoney    = str_replace(',', '', \Cart::subtotal(0, 3));
        $transactionId = Transaction::insertGetId([
            'tr_user_id' => \Auth::guard('nd')->user()->id,
            'tr_total'   => (int)$totalMoney,
            'tr_address' => $request->address,
            'tr_phone'   => $request->phone_number,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        if ($transactionId) {
            $products = \Cart::content();
            foreach ($products as $product) {
                Order_Detail::insert([
                    'order_id'   => $transactionId,
                    'product_id' => $product->id,
                    'quantities' => $product->qty,
                    'price'      => $product->options->price_old,
                ]);
            }
        }

        \Cart::destroy();

        return redirect()->route('client.home');
    }

    /**
     *  Xoá sản phẩm đơn hang
     * */
    public function delete(Request $request, $rowId)
    {
        \Cart::remove($rowId);
        return redirect()->back();
    }
}
