<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order_Detail extends Model
{
    use SoftDeletes;
    public $table = "order_details";

    public function product()
    {
        return $this->belongsTo(Product::class,'order_id');
    }
}
