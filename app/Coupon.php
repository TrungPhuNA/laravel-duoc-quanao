<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coupon extends Model
{
    use SoftDeletes;
    public $table = "coupons";

    public function user(){
    	return $this->belongsTo('App\User','employee_id');
    }
    public function coupoun_detail(){
    	return $this->hasMany('App\Coupoun_Detail','coupon_id');
    }
}
