<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::group(['domain'=>'cms.ban-hang.test'],function(){
	Route::namespace('Admin')->prefix('admin')->group(function () {
	    Route::get('/', 'DashboardController@index')->name('admin.dashboard');
	    Route::resource('product', 'ProductController')->except(['show']);
	    Route::resource('category_product', 'CategoryProductController')->except(['show']);
	});
});