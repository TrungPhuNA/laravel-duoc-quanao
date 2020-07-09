<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryProduct extends Model
{
    use SoftDeletes;
    public $table = "category_products";

    public function products(){
    	return $this->hasMany('App\Product','category_product_id');
    }
}
