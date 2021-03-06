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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth.basic');

//customer
Route::get('/dashboard/customers', 'CustomerController@index')->name('customers')->middleware('auth.basic');
Route::get('/dashboard/customer/create', 'CustomerController@create')->name('customer.create')->middleware('auth.basic');
Route::post('/dashboard/customer/store', 'CustomerController@store')->name('customer.store')->middleware('auth.basic');
Route::get('/dashboard/customer/edit/{id}', 'CustomerController@edit')->name('customer.edit')->middleware('auth.basic');
Route::post('/dashboard/customer/update', 'CustomerController@update')->name('customer.update')->middleware('auth.basic');
Route::get('/dashboard/customer/destroy/{id}', 'CustomerController@destroy')->name('customer.destroy')->middleware('auth.basic');
//product
Route::get('/dashboard/products', 'ProductController@index')->name('products')->middleware('auth.basic');
Route::get('/dashboard/product/create', 'ProductController@create')->name('product.create')->middleware('auth.basic');
Route::post('/dashboard/product/store', 'ProductController@store')->name('product.store')->middleware('auth.basic');
Route::get('/dashboard/product/edit/{id}', 'ProductController@edit')->name('product.edit')->middleware('auth.basic');
Route::post('/dashboard/product/update', 'ProductController@update')->name('product.update')->middleware('auth.basic');
Route::get('/dashboard/product/destroy/{id}', 'ProductController@destroy')->name('product.destroy')->middleware('auth.basic');
Route::get('/dashboard/product/duplicate/{id}', 'ProductController@duplicate')->name('product.duplicate')->middleware('auth.basic');

//orders
Route::get('/dashboard/orders', 'OrderController@index')->name('orders')->middleware('auth.basic');
Route::get('/dashboard/order/create', 'OrderController@create')->name('order.create')->middleware('auth.basic');
Route::post('/dashboard/order/store', 'OrderController@store')->name('order.store')->middleware('auth.basic');
Route::get('/dashboard/order/edit/{id}', 'OrderController@edit')->name('order.edit')->middleware('auth.basic');
Route::post('/dashboard/order/update', 'OrderController@update')->name('order.update')->middleware('auth.basic');
Route::get('/dashboard/order/destroy/{id}', 'OrderController@destroy')->name('order.destroy')->middleware('auth.basic');
//order item
Route::post('/dashboard/order-item/store', 'OrderItemController@store')->name('order.item.store')->middleware('auth.basic');
Route::get('/dashboard/order-item/list/{order_id}', 'OrderItemController@list')->name('order.item.list')->middleware('auth.basic');
Route::get('/dashboard/order-item/destroy/{id}', 'OrderItemController@destroy')->name('order.item.destroy')->middleware('auth.basic');