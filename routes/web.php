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
Route::get('/user', 'UserController@index');
Route::get('/user/create', 'UserController@create')->name('user.create');
Route::post('/user', 'UserController@store')->name('user.store');
Route::post('/user/delete/{id}', 'UserController@destroy')->name('user.destroy');
Route::get('/user/detail/{id}', 'UserController@detail')->name('user.detail');
Route::post('/user/update/{id}', 'UserController@update')->name('user.update');
Route::post('/users/simpan_status/{id}', 'UserController@simpan_status')->name('user.simpan_status');
