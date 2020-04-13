<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['prefix' => 'admin'], function() {
    Route::get('/login', 'AdminController@login')->name('admin.login');
    Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/categories', 'CategoryController@main_category')->name('admin.main_category');
    Route::get('/sub_categories', 'CategoryController@sub_category')->name('admin.sub_category');
    Route::get('/orders', 'OrderController@index')->name('admin.orders');
});




