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
Route::resource('/product','ProductsController');
Route::resource('/category','CategoriesController');
Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');
