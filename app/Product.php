<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
	protected $fillable = [
        'supplier_id', 'category_product_id', 'name', 'slug', 'price', 'description', 'quantities', 'size', 'image', 'status'
    ];

    public function category_product(){
    	return $this->belongsTo('App\CategoryProduct');
    }

 //    public function hot_product(){
 //        return $this->hasMany('App\HotProduct');
 //    }

 //    public function selective_product(){
 //        return $this->hasMany('App\SelectiveProduct');
 //    }

 //    public function key_words(){
	// 	return $this->belongsTomany('App\Key_Word','products_key_words','product_id','key_word_id')->whereNull('products_key_words.deleted_at')->withTimestamps();
	// }

	// public function products_photos(){
 //    	return $this->hasMany('App\ProductsPhoto','product_id');
 //    }
}
