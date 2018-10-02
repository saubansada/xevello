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

Route::get('/', 'HomeController@index');
Route::get('/about','HomeController@about');
Route::get('/orders/new','OrdersController@new');
Route::get('/orders','OrdersController@index'); 

Route::resource('products','ProductsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
