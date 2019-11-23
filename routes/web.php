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

Route::get('/', 'WebstoreController@index')->name('index');
Route::get('products', 'WebstoreController@products')->name('products');
Route::get('single/{product}', 'WebstoreController@single')->name('singleproduct');


# Adding a product to the shopping cart
Route::get('/add/{product}', 'WebstoreController@addToCart')->name('add');


# Removing an product from the shopping cart
Route::get('/remove/{productId}', 'WebstoreController@removeProductFromCart')->name('remove');

# Clearing all products from the shopping cart
Route::get('/empty', 'WebstoreController@destroyCart')->name('empty');
Route::get('/login', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::middleware(['auth'])->group(function () {

    Route::get('/checkout', 'WebstoreController@checkout')->name('checkout');
    Route::post('order', 'OrderController@store')->name('store.order');

    Route::group(['middleware' => ['admin']], function () {

        Route::get('/admin', 'AdminController@index')->name('index');
        Route::resource('/categories', 'CategoryController');
       // Route::get('/categories/{id}', 'CategoryController@index')->name('index');

       Route::resource('profile', 'AdminController')->except('index') ;
       Route::resource('softwares', 'ProductController');
    });

});
#Route::get('checkout', 'PaypalController@payWithpaypal')->name('checkout');




Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');
 Route::get('/softwares', 'HomeController@softwares')->name('software');

 Route::get('/adminlogin',function(){
     return view('admin.login');
 });
