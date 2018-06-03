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
//     return view('welcome');
// });

// Route::view('/thien','index');

// Route::prefix('thoi-trang')->group(function() {
//     Route::get('viet-nam', function(){
//         return 'thoi trang viet nam';
//     });
//     Route::get('quoc-te', function(){
//         return 'thoi trang quoc te';
//     });
// });

// Route::get('/', function(){
//     return view('greeting', ['name'=>'thien']);
// });
Route::view('/','index');
