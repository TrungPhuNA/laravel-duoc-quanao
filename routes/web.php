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

Route::group(['domain'=>'ban-hang.test'],function(){
	Route::get('/', 'HomeController@index')->name('client.home');
	Route::get('/product/{id}', 'ProductController@detail')->name('client.product_detail');
	Route::get('/contact', 'ContactController@create')->name('client.contact_create');
	Route::get('/login', 'LoginController@create')->name('client.login_create');
	Route::get('/category_product/{id}', 'ProductCategoryController@detail')->name('client.category_producte_detail');
});

Route::group(['domain'=>'cms.ban-hang.test'],function(){
	Route::namespace('Admin')->prefix('admin')->middleware(['auth'])->group(function () {
		Route::middleware(['is_admin'])->group(function () {
		    Route::get('/', 'DashboardController@index')->name('admin.dashboard');
		    Route::resource('product', 'ProductController')->except(['show']);
		    Route::resource('category_product', 'CategoryProductController')->except(['show']);
		    Route::resource('supplier', 'SuppliersController')->except(['show']);
		    Route::resource('information', 'InformationsController')->except(['show']);
		    Route::resource('user', 'UsersController')->except(['show']);
		    Route::get('/contact', 'ContactsController@index')->name('contact.index');
		    Route::get('/counp', 'CouponsController@index')->name('counp.index');
		    Route::delete('/counp/{category}', 'CouponsController@destroy')->name('counp.destroy');
		    Route::get('/counp/counp_detail/{counp_id}', 'CouponsController@detail')->name('counp.detail');
		});
		Route::middleware(['is_role_access'])->group(function () {
		    Route::resource('order', 'OrdersController')->except(['show']);
		});
	});
	Auth::routes(['register' => false]);
	Route::get('/logout', 'Auth\LoginController@logout')->name('auth.logout');
});

Route::get('/home', 'HomeController@index')->name('home');
