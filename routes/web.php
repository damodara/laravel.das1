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
Route::get('/page', function () {
    return view('page');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/file', 'FileController@index');
Route::get('/file/store', 'FileController@store');

Route::get('upload', 'UploadController@index');
Route::post('store', 'UploadController@store');