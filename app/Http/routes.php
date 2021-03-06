<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::group(['prefix'=>'admin', 'middleware'=>'auth.checkrole', 'as'=>'admin.'], function(){
	//Categories
	Route::get('categories', ['as'=>'categories.index','uses'=>'CategoriesController@index']);
	Route::get('categories/create', ['as'=>'categories.create','uses'=>'CategoriesController@create']);
	Route::get('categories/edit/{id}', ['as'=>'categories.edit','uses'=>'CategoriesController@edit']);
	Route::post('categories/update/{id}', ['as'=>'categories.update','uses'=>'CategoriesController@update']);
	Route::post('categories/store', ['as'=>'categories.store','uses'=>'CategoriesController@store']);
	//Products
	Route::get('products', ['as'=>'products.index','uses'=>'ProductController@index']);
	Route::get('products/create', ['as'=>'products.create','uses'=>'ProductController@create']);
	Route::get('products/edit/{id}', ['as'=>'products.edit','uses'=>'ProductController@edit']);
	Route::post('products/update/{id}', ['as'=>'products.update','uses'=>'ProductController@update']);
	Route::post('products/store', ['as'=>'products.store','uses'=>'ProductController@store']);
	Route::get('products/destroy/{id}', ['as'=>'products.destroy','uses'=>'ProductController@destroy']);
	//Clients
	Route::get('clients', ['as'=>'clients.index','uses'=>'ClientController@index']);
	Route::get('clients/create', ['as'=>'clients.create','uses'=>'ClientController@create']);
	Route::get('clients/edit/{id}', ['as'=>'clients.edit','uses'=>'ClientController@edit']);
	Route::post('clients/update/{id}', ['as'=>'clients.update','uses'=>'ClientController@update']);
	Route::post('clients/store', ['as'=>'clients.store','uses'=>'ClientController@store']);
	Route::get('clients/destroy/{id}', ['as'=>'clients.destroy','uses'=>'ClientController@destroy']);
	//Orders
	Route::get('orders', ['as'=>'orders.index','uses'=>'OrderController@index']);
	Route::get('orders/{id}', ['as'=>'orders.edit','uses'=>'OrderController@edit']);
	Route::post('orders/update/{id}', ['as'=>'orders.update','uses'=>'OrderController@update']);
	//Cupoms
	Route::get('cupoms', ['as'=>'cupoms.index','uses'=>'CupomsController@index']);
	Route::get('cupoms/create', ['as'=>'cupoms.create','uses'=>'CupomsController@create']);
	Route::get('cupoms/edit/{id}', ['as'=>'cupoms.edit','uses'=>'CupomsController@edit']);
	Route::post('cupoms/update/{id}', ['as'=>'cupoms.update','uses'=>'CupomsController@update']);
	Route::post('cupoms/store', ['as'=>'cupoms.store','uses'=>'CupomsController@store']);
});

Route::group(['prefix'=>'customer', 'as'=>'customer.'], function(){

	Route::get('order/index', ['as'=>'order.index', 'uses'=>'CheckoutController@index']);
	Route::get('order/create', ['as'=>'order.create', 'uses'=>'CheckoutController@create']);
	Route::post('order/store', ['as'=>'order.store', 'uses'=>'CheckoutController@store']);

});
