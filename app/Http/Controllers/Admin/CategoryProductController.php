<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryProductStoreRequest;
use App\Http\Requests\CategoryProductUpdateRequest;
use App\CategoryProduct;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryProduct = CategoryProduct::paginate(10);
        return View('backend.category_product.index',compact('categoryProduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryProduct = CategoryProduct::all();
        return View('backend.category_product.create',compact('categoryProduct'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryProductCategoryStoreRequest $request)
    {
        $categoryProductModel                     = new CategoryProduct();
        $categoryProductModel->name               = $request->name;
        $categoryProductModel->slug               = $request->slug;
        $categoryProductModel->status             = $request->status;
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
        $categoryProductAll = CategoryProduct::all();
        $categoryProduct   = CategoryProduct::find($id);
        return View('backend.product_category.edit',compact('categoryProductAll','categoryProduct'));
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
        $categoryProduct                   		= CategoryProduct::find($id);
        $categoryProduct->name               = $request->name;
        $categoryProduct->slug               = $request->slug;
        $categoryProduct->status             = $request->status;
        $categoryProduct->parent_id          = $request->parent_id;

        try {
            $categoryProductModel->save();
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
        $categoryProduct             = CategoryProduct::find($id);
        $categoryProductAll           = CategoryProduct::all();
        $categoryProduct->delete();

        foreach($categoryProductAll as $category)
        {
            if($category->parent_id == $categoryProduct->id)
            {
                $category->delete();
                foreach($category->products as $product)
                {
                    $product->delete();
                }
            }
        }

        foreach($categoryProduct->products as $product)
        {
            $product->delete();
        }
        
        return redirect()->route('category_product.index'); 
    }
}
