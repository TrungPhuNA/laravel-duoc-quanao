<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\CategoryProduct;
use App\Product;
use App\Supplier;
use App\Coupon;
use App\Coupon_Detail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Image;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (isset($request->name)) {
            $products = Product::where('products.name', 'like', '%' . trim($request->name) . '%')->paginate(6);
        } else {
            $products = Product::paginate(6);
        }
    	//lấy tất cả danh mục và phân trang 10 sản phẩm trên 1 trang
        return View('backend.product.index',compact('products', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	//lấy tất cả danh mục
        $categoryProducts = CategoryProduct::all();
        $suppliers        = Supplier::all();
        return View('backend.product.create',compact('categoryProducts', 'suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
        $couponDetailModel = new Coupon_Detail();

        $productInput['name']                = $request->name;
        $productInput['slug']                = Str::slug($request->name, '-');
        $productInput['price']               = $request->price;
        $productInput['description']         = $request->description;
        $productInput['quantities']          = $request->quantities;
        $productInput['status']              = $request->status ? 1 : 0;
        $productInput['category_product_id'] = $request->category_product_id ? $request->category_product_id : null;
        $productInput['supplier_id']         = $request->supplier_id ? $request->supplier_id : null;

        if ($request->hasFile('image')){
            $imagePath = $request->file('image')->store('public/images');
            $image = Image::make(Storage::get($imagePath))->resize(300,300)->encode();
            Storage::put($imagePath,$image);
            $imagePath = explode('/',$imagePath);
            $imagePath = $imagePath[2];
            $productInput['image'] = $imagePath;
        }
        DB::beginTransaction();
        try {
            // thêm sản phẩm bảng product
            $product = Product::create($productInput);
            // thêm sản phẩm bảng nhập phiếu hàng
            $couponInput['employee_id'] = Auth::user()->id;
            $coupon = Coupon::create($couponInput);
            // thêm sản phẩm bảng nhập phiếu hàng chi tiết
            $couponDetailModel->coupon_id = $coupon->id;
            $couponDetailModel->product_id = $product->id;
            $couponDetailModel->price = $request->price;
            $couponDetailModel->quantities = $request->quantities;
            $couponDetailModel->save();

            DB::commit();
            return redirect()->route('product.index');
        } catch (Exception $e) {
            DB::rollback();
            die($e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	//lấy tất cả danh mục
        $categoryProducts = CategoryProduct::all();
        $suppliers        = Supplier::all();
        //lấy tất cả sản phẩm
        $product   = Product::find($id);
        return View('backend.product.edit',compact('product','categoryProducts', 'suppliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdateRequest $request, $id)
    {
        $product                      = Product::find($id);
        $product->name                = $request->name;
        $product->slug                = Str::slug($request->name, '-');
        $product->price               = $request->price;
        $product->description         = $request->description;
        $product->quantities          = $request->quantities;
        $product->status              = $request->status ? 1 : 0;
        $product->category_product_id = $request->category_product_id ? $request->category_product_id : null;
        $product->supplier_id         = $request->supplier_id ? $request->supplier_id : null;

        if ($request->hasFile('image')){
            $imagePath = $request->file('image')->store('public/images');
            $image = Image::make(Storage::get($imagePath))->resize(300,300)->encode();
            Storage::put($imagePath,$image);
            $imagePath = explode('/',$imagePath);
            $imagePath = $imagePath[2];
            $product->image = $imagePath;
        }

        try {
            $product->save();
            return redirect()->route('product.index');
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	DB::beginTransaction();
        try {
            Product::find($id)->delete();
            DB::commit();
            return redirect()->route('product.index');
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('product.index');
        }
    }
}
