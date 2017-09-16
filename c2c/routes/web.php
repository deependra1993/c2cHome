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
	$prD=DB::table('products')->get();
   return view('welcome',compact('prD'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('add','HomeController@add')->name('add');
Route::get('create','ProductsController@create')->name('addProduct');
//Route::get('index','ProductsController@index')->name('productlist');

Route::resource('/product','ProductsController');
Route::resource('/category','CategoriesController');
