<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends MenuController
{
    public function about()
    {
        $menu_parent = self::getMenus();
        return view('frontend.about',compact('menu_parent'));
    }

    public function shoppingGuide()
    {
        $menu_parent = self::getMenus();
        return view('frontend.shopping_guide',compact('menu_parent'));
    }
    public function policy()
    {
        $menu_parent = self::getMenus();
        return view('frontend.policy',compact('menu_parent'));
    }
}
