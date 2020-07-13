<?php

namespace App\Http\Controllers\Admin;

use App\Coupon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouponsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $coupons = Coupon::paginate(6);
        return View('backend.coupon.index',compact('coupons', 'request'));
    }

    public function detail($couponId) {
        $couponDetail = Coupon::find($couponId)->paginate(6);
        return View('backend.coupon.detail',compact('couponDetail'));
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
            Coupon::find($id)->delete();
            DB::commit();
            return redirect()->route('coupon.index');
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('coupon.index');
        }
    }
}
