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
//     return view('welcome');
// });

Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');
 Route::get('/softwares', 'HomeController@softwares')->name('software');

Route::get('/', function () {
    return view('customer/index');
 });

Route::get('/clientlogin', function () {
    return view('auth/clientlogin');
 });
 Route::get('/about', function () {
    return view('customer/about');

 });Route::get('/contact', function () {
    return view('customer/contact');

 });Route::get('/cart', function () {
    return view('customer/cart');

 });Route::get('/blog', function () {
    return view('customer/blog');

 });
 Route::get('/singleproduct', function () {
    return view('customer/singleproduct');

 });
 Route::get('/portfolio', function () {
    return view('customer/portfolio');

 });Route::get('/wishlist', function () {
    return view('customer/wishlist');

 });Route::get('/shop', function () {
    return view('customer/shop');

 });
 Route::get('/checkout', function () {
    return view('customer/checkout');

 });






 Route::get('/admin', function () {

    return view('admin.index');
 });

 Route::get('/adminlogin',function(){
     return view('admin.login');
 });
