<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coupon_Detail extends Model
{
    use SoftDeletes;
    public $table = "coupon_detail";

    public function product(){
    	return $this->belongsTo('App\Products','product_id');
    }
}
