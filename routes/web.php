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
Route::get('/dev/home', 'AdminController@index');
Route::get('/dev/category', 'AdminController@category');
Route::get('/dev/user', 'AdminController@user');
Route::get('/dev/item', 'AdminController@item');