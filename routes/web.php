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

Auth::routes();

Route::get('/', 'PagesController@index')->name('home');
Route::get('categories', 'PagesController@categories')->name('category');
Route::get('category/{slug}', 'PagesController@product_category')->name('product_category');
Route::get('product/{slug}', 'PagesController@product')->name('product');

//User
Route::group(['middleware' => ['auth']], function () {
    Route::resource('changepassword', 'ChangePasswordController');
});

//Manager
Route::group(['middleware' => ['auth','admin']], function () {
    Route::resource('admin/categories', 'CategoriesController');
    Route::resource('admin/products', 'ProductsController');
});