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
	alert()->message('Message', 'Optional Title');
    return redirect('admin/category')->with('success', 'Profile updated!');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
	Route::get('dashboard', 'HomeController@index');
	//Route::get('category', 'CategoryController@index');
	//Route::post('category', 'CategoryController@store')->name('admin.category');
	Route::resource('category','CategoryController');
	Route::resource('product','ProductController');
});