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

// Route::get('/', function () {
//     return view('myblog');
// });

// Route::resource('categories','CategoryController');
Route::get('/category/home','CategoryController@index')->name('home');
Route::get('/category/create','CategoryController@create')->name('create');
Route::post('/category/store','CategoryController@store')->name('store');
Route::get('/category/{id}/show','CategoryController@show')->name('show');
Route::get('/category/{id}/edit','CategoryController@edit')->name('edit');
Route::put('/category/{id}/update','CategoryController@update')->name('update');
Route::delete('/category/{id}/destroy','CategoryController@destroy')->name('destroy');
