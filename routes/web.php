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

Route::group(['namespace' => 'Auth','prefix' => 'thanh-vien'], function(){
    Route::get('dang-ky','RegisterController@getFormRegister')->name('get.user.register'); // đăng ký
    Route::post('dang-ky','RegisterController@postRegister'); // xử lý đăng ký

    Route::get('dang-nhap','LoginController@getFormLogin')->name('get.user.login'); // đăng nhập
    Route::post('dang-nhap','LoginController@postLogin'); // xử lý đăng nhập

    Route::get('dang-xuat','LoginController@getLogout')->name('get.user.logout'); // đăng xuất
});


Route::get('/', 'HomeController@index')->name('client.home');
Route::get('/product/{id}', 'ProductController@detail')->name('client.product_detail');
Route::get('/contact', 'ContactController@create')->name('client.contact_create');
Route::get('/login', 'LoginController@create')->name('client.login_create');
Route::get('/category_product/{id}', 'ProductCategoryController@detail')->name('client.category_producte_detail');

Route::get('don-hang.html','ShoppingCartController@index')->name('get.shopping.list'); // gio hang
Route::prefix('shopping')->group(function () {
    Route::get('add/{id}','ShoppingCartController@add')->name('get.shopping.add'); // thêm giỏ hàng
    Route::get('delete/{id}','ShoppingCartController@delete')->name('get.shopping.delete'); // xoá sp trong gi hàng
    Route::get('update/{id}','ShoppingCartController@update')->name('ajax_get.shopping.update'); // cập nhật
    Route::get('pay','ShoppingCartController@saveTransaction')->name('post.shopping.pay'); // xử lý giỏ hàng lưu thông tin
    Route::get('delete-all','ShoppingCartController@deleteAll')->name('get.shopping.delete_all'); // xử lý giỏ hàng lưu thông tin
});

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

Route::get('/home', 'HomeController@index')->name('home');
