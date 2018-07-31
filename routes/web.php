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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/search', 'ItemsController@index');

// Admin
Route::get('/dev/home', 'AdminHomeController@index');

Route::get('/dev/category', 'AdminCategoryController@index');
Route::get('/dev/category/create', 'AdminCategoryController@create');
Route::get('/dev/category/{id}', 'AdminCategoryController@show');

Route::get('/dev/user', 'AdminUserController@index');
Route::get('/dev/user/create', 'AdminUserController@create');
Route::get('/dev/user/{id}', 'AdminUserController@show');

Route::get('/dev/item', 'AdminItemController@index');
Route::get('/dev/item/create', 'AdminItemController@create');
Route::get('/dev/item/{id}', 'AdminItemController@show');

Route::get('/dev', 'AdminController@index');