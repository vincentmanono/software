<?php

use Illuminate\Support\Facades\Auth;

Route::get('/', 'WebstoreController@index')->name('index');
Route::get('products', 'WebstoreController@products')->name('products');
Route::get('help', 'WebstoreController@help')->name('help');
Route::get('single/{product}', 'WebstoreController@single')->name('singleproduct');
 Route::any('search', 'WebstoreController@search_software')->name('search.software');
 Route::get('payment', 'PaymentController@pay')->name('payment.show');
Route::post('/payment', 'PaymentController@index')->name('payment');


# Adding a product to the shopping cart
Route::get('/add/{product}', 'WebstoreController@addToCart')->name('add');


# Removing an product from the shopping cart
Route::get('/remove/{productId}', 'WebstoreController@removeProductFromCart')->name('remove');

# Clearing all products from the shopping cart
Route::get('/empty', 'WebstoreController@destroyCart')->name('empty');
Route::get('/login', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::middleware(['auth','verified'])->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/checkout', 'WebstoreController@checkout')->name('checkout');
    Route::post('order', 'OrderController@store')->name('store.order');

    Route::group(['middleware' => ['admin']], function () {

        Route::get('/admin', 'AdminController@index')->name('index');
        Route::resource('/categories', 'CategoryController');
       // Route::get('/categories/{id}', 'CategoryController@index')->name('index');

       Route::resource('profile', 'AdminController')->except('index') ;
       Route::resource('softwares', 'ProductController');
       Route::get('/customers', 'CustomerController@index')->name('customer.index');
       Route::get('/customers/{id}', 'CustomerController@show')->name('customers.show');
       Route::post('/customers/{id}', 'CustomerController@update')->name('customers.update');
       Route::delete('/customers/{id}', 'CustomerController@destroy')->name('customers.destroy');
       Route::put('approve/{id}', 'OrderController@update')->name('order.approve');
       Route::get('orders', 'OrderController@index')->name('allOrders');

       Route::get('/admin/payments',"PaymentController@index")->name("admin.payments") ;

    });

});
#Route::get('checkout', 'PaypalController@payWithpaypal')->name('checkout');




Auth::routes(['verify' => true]);

 
 Route::get('/softwares', 'HomeController@softwares')->name('software');

 Route::get('/adminlogin',function(){
     return view('admin.login');
 });
