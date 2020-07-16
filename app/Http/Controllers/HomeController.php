<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryProduct;
use App\Product;
use App\Information;

class HomeController extends MenuController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productViews = Product::orderBy('quantity_access', 'DESC')->take(6)->get();
        $productNews  = Product::paginate(8);
        $productSale  = Product::orderBy('quantity_sell', 'DESC')->take(8)->get();

        $menu_parent = self::getMenus();

        $infor = self::getInforShop();

        return view('frontend/home', compact('menu_parent', 'infor', 'productNews', 'productViews', 'productSale'));
    }
}
