<?php

/*
|--------------------------------------------------------------------------
| Web Routes pro mohammad belayet hossen...
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Frontend Routes
Route::get('/', 'FrontendController@index');
Route::get('/contact', 'FrontendController@contact');
Route::get('/product/{product_id}', 'FrontendController@productdetails');


// Admin Routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


// Products Links
Route::get('/add/product/view', 'ProductController@addproductview');
Route::post('/add/product/insert', 'ProductController@addproductinsert');
Route::get('/product/delete/{product_id}', 'ProductController@productdelete');
Route::get('/product/restore/{product_id}', 'ProductController@productrestore');
Route::get('/product/edit/{product_id}', 'ProductController@productedit');
Route::post('/edit/product/insert', 'ProductController@editproductinsert');


// Slider Links
Route::get('/add/slider/view', 'SliderController@addsliderview');
Route::post('/add/slider/insert', 'SliderController@addsliderinsert');
Route::get('/slider/delete/{slider_id}', 'SliderController@sliderdelete');
Route::get('/slider/restore/{slider_id}', 'SliderController@sliderrestore');
Route::get('/slider/edit/{slider_id}', 'SliderController@slideredit');
Route::post('/edit/slider/insert', 'SliderController@editsliderinsert');

// Coupon Links
Route::get('/add/coupon/view', 'CouponController@addcouponview');
Route::post('/coupon/insert', 'CouponController@couponinsert');

// Add to Cart
Route::post('add/to/cart', 'FrontendController@addtocart');
Route::get('cart/view', 'FrontendController@cartview')->name('cart');
Route::get('delete/from/cart/{cart_id}', 'FrontendController@deletefromcart')->name('delfromcart');
