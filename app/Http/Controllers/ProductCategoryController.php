<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryProduct;
use App\Product;

class ProductCategoryController extends MenuController
{
    public function detail($id) {
    	$categoryProducts = CategoryProduct::find($id);
    	$products = Product::where('category_product_id', $id)->paginate(15);
    	$menu_parent = self::getMenus();
        $infor = self::getInforShop();
    	return view('frontend/category_product', compact('categoryProducts', 'menu_parent', 'infor', 'products'));
    }
}
