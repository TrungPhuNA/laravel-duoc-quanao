<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryProduct;
use App\Product;
use App\Information;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $menus = CategoryProduct::all();
        $menu_parent = $menus->where('parent_id',null);
        $informations = Information::all();
        $product = Product::paginate(12);
        $category = [];

        if (!$menu_parent->isEmpty()) {
            foreach($menu_parent as $menu){
                $myArray = [];
                foreach($menus as $m){
                    if($menu->id == $m->parent_id){
                        array_push($myArray,$m);
                    }
                }
                $menu->menu_children=$myArray;
            }
        }

        $infor = [];
        if (!$informations->isEmpty()) {
            foreach ($informations as $inf) {
                $infor[$inf->slug]['id'] = $inf->id;
                $infor[$inf->slug]['title'] = $inf->title;
                $infor[$inf->slug]['content'] = $inf->content;
            }
        }

        return view('frontend/home', compact('menu_parent', 'infor', 'product'));
    }
}
