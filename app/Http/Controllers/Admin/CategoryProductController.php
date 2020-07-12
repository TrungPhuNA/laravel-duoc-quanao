<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryProductStoreRequest;
use App\Http\Requests\CategoryProductUpdateRequest;
use App\CategoryProduct;
use App\Product;
use Illuminate\Support\Str;
use DB;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (isset($request->name)) {
            $categoryProduct = CategoryProduct::where('category_products.name', 'like', '%' . trim($request->name) . '%')->paginate(6);
        } else {
            $categoryProduct = CategoryProduct::paginate(6);
        }

        return View('backend.category_product.index',compact('categoryProduct', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	//lấy tất cả danh mục
        $categoryProduct = CategoryProduct::all();
        return View('backend.category_product.create',compact('categoryProduct'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryProductStoreRequest $request)
    {
        $categoryProductModel                     = new CategoryProduct();
        $categoryProductModel->name               = $request->name;
        $categoryProductModel->slug               = Str::slug($request->name, '-');
        $categoryProductModel->status             = $request->status ? 1 : 0;
        $categoryProductModel->parent_id          = $request->parent_id;
        try {
            $categoryProductModel->save();
            return redirect()->route('category_product.index');
        } catch (Exception $e) {
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
        $categoryProductAll = CategoryProduct::where('parent_id' , '<>', $id)
        					->orwhereNull('parent_id')
        					->get();
        //lấy tất cả danh mục ứng với id
        $categoryProduct   = CategoryProduct::find($id);
        return View('backend.category_product.edit',compact('categoryProductAll','categoryProduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryProductUpdateRequest $request, $id)
    {
        $categoryProduct                   	 = CategoryProduct::find($id);
        $categoryProduct->name               = $request->name;
        $categoryProduct->slug               = Str::slug($request->name, '-');
        $categoryProduct->status             = $request->status ? 1 : 0;
        $categoryProduct->parent_id          = $request->parent_id;

        try {
            $categoryProduct->save();
            return redirect()->route('category_product.index');
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
        	//gán khóa ngoại category_product_id bảng product là null
            Product::join('category_products', 'category_products.id', '=', 'products.category_product_id')
                ->where('category_products.id', $id)->update(['category_product_id' => null]);
            //gán khóa ngoại category_product_id bảng product là null (trong trường hợp có thể loại con của thể laoij bị xóa)
            Product::join('category_products', 'category_products.id', '=', 'products.category_product_id')
                ->where('parent_id', $id)->update(['category_product_id' => null]);
            //gán parent_id của thằng category con kế thừa thằng bị xóa về null
            CategoryProduct::where('parent_id', $id)->update(['parent_id' => null]);
            CategoryProduct::find($id)->delete();

            DB::commit();
            return redirect()->route('category_product.index');
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('category_product.index');
        }
    }
}
