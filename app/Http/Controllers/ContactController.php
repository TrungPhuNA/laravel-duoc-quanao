<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends MenuController
{
    public function create()
    {
    	$menu_parent = self::getMenus();

        $infor = self::getInforShop();
        return view('frontend/contact', compact('menu_parent', 'infor'));
    }
}
