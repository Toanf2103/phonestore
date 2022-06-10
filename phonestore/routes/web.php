<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'User\HomeController@index')->name('user.index');

Route::get('/tus', 'User\HomeController@tus'); //day la test

Route::get('/user/inf', 'User\UserController@user_inf')->name('user.inf');
Route::post('/user/inf/edid', 'User\UserController@user_inf_edid')->name('user_inf_edid');
Route::get('/user/don_mua', 'User\UserController@don_mua')->name('don_mua');

Route::get('/login', 'User\LoginController@user_login_view')->name('login_view');
Route::post('/login', 'User\LoginController@user_login')->name('login');

Route::get('/dang_ki', 'User\LoginController@user_dang_ki_view')->name('dang_ki_view');
Route::post('/dang_ki', 'User\LoginController@user_dang_ki')->name('dang_ki');

Route::get('/logout', 'User\LoginController@user_logout')->name('logout');

Route::get('/quen_mk/view', 'User\UserController@quen_mk_view')->name('quen_mk_view');
Route::get('/doi_mk', 'User\UserController@doi_mk_view')->name('doi_mk_view');
Route::post('/doi_mk', 'User\UserController@doi_mk')->name('doi_mk');

Route::get('/cart', 'User\HomeController@cart')->name('cart');
Route::get('/cart/up_sl/{sl}/{id_sp}/{don_gia}', 'User\AjaxController@up_sl')->name('up_sl');
Route::get('/cart/xoa_sp/{id_nd}/{id_sp}', 'User\AjaxController@xoa_sp');

Route::get('/product/category_brand/view/{DM_id}/{TH_id}', 'User\ProductController@user_viewProductCategoryBrand')->name('user.product.category_brand.view');
Route::get('/product/view/{id}', 'User\ProductController@view_product')->name('product.view');
Route::get('/product/add_cart/{id_nd}/{id_product}/{so_luong}', 'User\AjaxController@add_cart')->name('add_cart');
Route::get('/product/sp_khuyen_mai', 'User\ProductController@sp_khuyen_mai')->name('sp_khuyen_mai');

Route::get('/user/kt_email/{email}', 'User\AjaxController@kt_email');
Route::get('/user/kt_ma_xn/{ma_xn}/{email}', 'User\AjaxController@kt_ma_xn');

Route::get('/thanh_toan/view/{sp_thanh_toan}', 'User\HomeController@thanh_toan_view')->name('thanh_toan_view');
Route::post('/thanh_toan', 'User\HomeController@thanh_toan')->name('thanh_toan');


Route::get('/phan_trang/{i}/{mes}', 'User\AjaxController@phan_trang');
Route::get('/bo_loc/{sx}/{gia}/{ram}/{rom}/{tu_khoa}', 'User\AjaxController@bo_loc');

Route::get('/search', 'User\HomeController@search')->name('search');

Route::post('/danh_gia', 'User\AjaxController@danh_gia');
Route::post('/tl_danh_gia', 'User\AjaxController@tl_danh_gia');

Route::get('/in_don_hang/{id_hd}', 'User\UserController@in_don_hang')->name('in_don_hang');

// admin

Route::get('/admin', 'Admin\LoginController@index')->name('admin.login');
Route::get('/admin/login', 'Admin\LoginController@index')->name('admin.login');
Route::post('/admin/login', 'Admin\LoginController@login')->name('admin.login');

Route::group(['middleware' => 'checklogin'], function () {
    Route::get('/admin/dashboard', 'Admin\HomeController@dashboard')->name('admin.dashboard');
    Route::get('/admin/logout', 'Admin\LoginController@logout')->name('admin.logout');

    Route::get('/admin/product', ['as' => 'admin.product.index', 'uses' => 'Admin\ProductController@index']);
    Route::get('/admin/product/add', ['as' => 'admin.product.add', 'uses' => 'Admin\ProductController@addProduct']);
    Route::post('/admin/product/add', ['as' => 'admin.product.save', 'uses' => 'Admin\ProductController@addProductPost']);
    Route::get('/admin/product/edit/{id}', ['as' => 'admin.product.edit', 'uses' => 'Admin\ProductController@edit']);
    Route::post('/admin/product/edit/{id}', ['as' => 'admin.product.edit', 'uses' => 'Admin\ProductController@update']);
    Route::get('/admin/product/destroy/{id}', ['as' => 'admin.product.getDestroy', 'uses' => 'Admin\ProductController@destroy']);
    Route::get('/admin/product/{id}', ['as' => 'admin.product', 'uses' => 'Admin\ProductController@cate_product']);
    Route::get('/admin/product/active/{id}', ['as' => 'admin.product.active', 'uses' => 'Admin\ProductController@active']);


    Route::get('/admin/category', ['as' => 'admin.category.index', 'uses' => 'Admin\CateController@index']);
    Route::get('/admin/category/add', ['as' => 'admin.category.add', 'uses' => 'Admin\CateController@addCate']);
    Route::post('/admin/category/add', ['as' => 'admin.category.save', 'uses' => 'Admin\CateController@addCatePost']);
    Route::get('/admin/category/edit/{id}', ['as' => 'admin.category.edit', 'uses' => 'Admin\CateController@edit']);
    Route::post('/admin/category/edit/{id}', ['as' => 'admin.category.edit', 'uses' => 'Admin\CateController@update']);
    Route::get('/admin/category/destroy/{id}', ['as' => 'admin.category.getDestroy', 'uses' => 'Admin\CateController@destroy']);

    Route::get('/admin/brand', ['as' => 'admin.brand.index', 'uses' => 'Admin\BrandController@index']);
    Route::get('/admin/brand/add', ['as' => 'admin.brand.add', 'uses' => 'Admin\BrandController@addBrand']);
    Route::post('/admin/brand/add', ['as' => 'admin.brand.save', 'uses' => 'Admin\BrandController@addBrandPost']);
    Route::get('/admin/brand/edit/{id}', ['as' => 'admin.brand.edit', 'uses' => 'Admin\BrandController@edit']);
    Route::post('/admin/brand/edit/{id}', ['as' => 'admin.brand.edit', 'uses' => 'Admin\BrandController@update']);
    Route::get('/admin/brand/destroy/{id}', ['as' => 'admin.brand.getDestroy', 'uses' => 'Admin\BrandController@destroy']);

    //khuyến mãi
    Route::get('/admin/discount', ['as' => 'admin.discount.index', 'uses' => 'Admin\DiscountController@index']);
    Route::get('/admin/discount/add', ['as' => 'admin.discount.add', 'uses' => 'Admin\DiscountController@addDiscount']);
    Route::post('/admin/discount/add', ['as' => 'admin.discount.save', 'uses' => 'Admin\DiscountController@addDiscountPost']);
    Route::get('/admin/discount/edit/{id}', ['as' => 'admin.discount.edit', 'uses' => 'Admin\DiscountController@edit']);
    Route::post('/admin/discount/edit/{id}', ['as' => 'admin.discount.edit', 'uses' => 'Admin\DiscountController@update']);
    Route::get('/admin/discount/destroy/{id}', ['as' => 'admin.discount.getDestroy', 'uses' => 'Admin\DiscountController@destroy']);

    Route::get('/admin/order', ['as' => 'admin.order.index', 'uses' => 'Admin\OrderController@index']);
    Route::get('/admin/order/add', ['as' => 'admin.order.add', 'uses' => 'Admin\OrderController@addOrder']);
//    Route::post('/admin/order/add', ['as' => 'admin.order.save', 'uses' => 'Admin\OrderController@addOrderPost']);
    Route::get('/admin/order/detail/{id}', ['as' => 'admin.order.detail', 'uses' => 'Admin\OrderController@detail']);
    Route::get('/admin/order/edit/{id}', ['as' => 'admin.order.edit', 'uses' => 'Admin\OrderController@edit']);
    Route::post('/admin/order/edit/{id}', ['as' => 'admin.order.edit', 'uses' => 'Admin\OrderController@update']);
//    Route::get('/admin/order/detail/destroy/{id}', ['as' => 'admin.order.getDestroy', 'uses' => 'Admin\OrderController@destroy']);
    Route::get('/admin/order/action/{id}', ['as' => 'admin.order.action', 'uses' => 'Admin\OrderController@action']);
    Route::get('/admin/order/cancel/{id}', ['as' => 'admin.order.cancel', 'uses' => 'Admin\OrderController@cancel']);
    Route::get('/admin/order/returns/{id}', ['as' => 'admin.order.returns', 'uses' => 'Admin\OrderController@returns']);
    Route::get('/admin/order/del_product/{MaSP}/{MaHD}', ['as' => 'admin.order.getDestroy', 'uses' => 'Admin\OrderController@destroy']);
    Route::get('/admin/order/detail/{MaSP}/{MaHD}/{sl}', 'Admin\OrderController@change_sl');

//
    Route::get('/admin/user', ['as' => 'admin.user.index', 'uses' => 'Admin\UserController@index']);
    Route::get('/admin/user/add', ['as' => 'admin.user.add', 'uses' => 'Admin\UserController@addUser']);
    Route::post('/admin/user/add', ['as' => 'admin.user.save', 'uses' => 'Admin\UserController@addUserPost']);
    Route::get('/admin/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit']);
    Route::post('/admin/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@update']);
    Route::get('/admin/user/destroy/{id}', ['as' => 'admin.user.getDestroy', 'uses' => 'Admin\UserController@destroy']);
});









