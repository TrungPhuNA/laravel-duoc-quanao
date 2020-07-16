<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryProduct;
use App\Information;

class MenuController extends Controller
{
    public static function getMenus(){
        $menus = CategoryProduct::all();
        $menu_parent = $menus->where('parent_id',null);
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
        return $menu_parent;
    }

    public static function getInforShop(){
        $informations = Information::all();

        $infor = [];
        if (!$informations->isEmpty()) {
	        foreach ($informations as $inf) {
	            $infor[$inf->slug]['id'] = $inf->id;
	            $infor[$inf->slug]['title'] = $inf->title;
	            $infor[$inf->slug]['content'] = $inf->content;
	        }
	    }
        return $infor;
    }
}
