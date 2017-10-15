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

Route::get('/', 'indexController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('add','HomeController@add')->name('add');
Route::get('create','ProductsController@create')->name('addProduct');
Route::get('index','ProductsController@index')->name('productlist');


Route::resource('/product','ProductsController');
Route::resource('/category','CategoriesController');



Route::get('login/{service}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{service}/callback', 'Auth\LoginController@handleProviderCallback');



//this is pointing to the admin controller
Route::get('admin/','AdminController@index')->name('admin');
Route::get('admin/product','AdminController@PostedProduct')->name('product');
Route::get('allItems/','allItemController@index')->name('allItems');
Route::get('allItems/{id}', 'allItemController@message')->name('message');