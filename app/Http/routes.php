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
	Route::get('categories', ['as'=>'categories.index','uses'=>'CategoriesController@index']);
	Route::get('categories/create', ['as'=>'categories.create','uses'=>'CategoriesController@create']);
	Route::get('categories/edit/{id}', ['as'=>'categories.edit','uses'=>'CategoriesController@edit']);
	Route::post('categories/update/{id}', ['as'=>'categories.update','uses'=>'CategoriesController@update']);
	Route::post('categories/store', ['as'=>'categories.store','uses'=>'CategoriesController@store']);

	Route::get('products', ['as'=>'products.index','uses'=>'ProductController@index']);
	Route::get('products/create', ['as'=>'products.create','uses'=>'ProductController@create']);
	Route::get('products/edit/{id}', ['as'=>'products.edit','uses'=>'ProductController@edit']);
	Route::post('products/update/{id}', ['as'=>'products.update','uses'=>'ProductController@update']);
	Route::post('products/store', ['as'=>'products.store','uses'=>'ProductController@store']);
	Route::get('products/destroy/{id}', ['as'=>'products.destroy','uses'=>'ProductController@destroy']);
});


