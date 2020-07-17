<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order_Detail;
use App\Transaction;
use Illuminate\Http\Request;
use App\Order;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $transactions = Transaction::with('user:id,name')->paginate(10);
        return View('backend.order.index',compact('transactions'));
    }

    public function show($id) {
        $orders = Order_Detail::with('product')->get();
        return View('backend.order.show',compact('orders'));
    }
}
