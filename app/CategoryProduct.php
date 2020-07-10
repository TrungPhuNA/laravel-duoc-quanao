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

    public function category_product_parent(){
    	return $this->belongsTo('App\CategoryProduct','parent_id');
    }
}
