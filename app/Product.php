<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
	protected $fillable = [
        'supplier_id', 'category_product_id', 'name', 'slug', 'price', 'description', 'quantities', 'size', 'image', 'status', 'quantity_access', 'quantity_sale'
    ];

    public function category_product(){
    	return $this->belongsTo('App\CategoryProduct');
    }

    public function supplier(){
        return $this->belongsTo('App\Supplier');
    }
}
