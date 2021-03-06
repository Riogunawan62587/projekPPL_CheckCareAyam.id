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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/profil_saya/{id}', 'HomeController@profil_saya')->name('home.profil_saya');
Route::get('/home/edit/{id}', 'HomeController@edit')->name('home.edit');
Route::post('/home/update/{id}', 'HomeController@update')->name('home.update');

Route::get('/user', 'UserController@index');
Route::get('/user/create', 'UserController@create')->name('user.create');
Route::post('/user', 'UserController@store')->name('user.store');
Route::get('/user/{id}', 'UserController@detail')->name('user.detail');
Route::post('/user/delete/{id}', 'UserController@destroy')->name('user.destroy');
Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
Route::post('/user/update/{id}', 'UserController@update')->name('user.update');
Route::post('/users/simpan_status/{id}', 'UserController@simpan_status')->name('user.simpan_status');

Route::get('/daftar_penyakit', 'Disease_listController@index');
Route::post('/daftar_penyakit/simpan_penyakit', 'Disease_listController@simpan_penyakit')->name('daftar_penyakit.simpan_penyakit');
Route::post('/daftar_penyakit/update_penyakit/{id}', 'Disease_listController@update_penyakit')->name('daftar_penyakit.update_penyakit');

Route::get('/rekomendasi_pakan', 'Food_recommendedController@index')->name('rekomendasi.menu');

Route::get('/ayam_sehat', 'Food_recommendedController@ayam_sehat')->name('rekomendasi.sehat');
Route::get('/ayam_sehat/{id}/perhitungan', 'Food_recommendedController@ayam_sehat_perhitungan')->name('rekomendasi.sehat_perhitungan');
Route::post('/ayam_sehat/perhitungan', 'Food_recommendedController@ayam_sehat_perhitungan_halaman')->name('rekomendasi.sehat_perhitungan_halaman');
Route::post('/ayam_sehat/hasil', 'Food_recommendedController@ayam_sehat_hasil')->name('rekomendasi.sehat_hasil');

Route::get('/ayam_sakit', 'Food_recommendedController@ayam_sakit')->name('rekomendasi.sakit');
Route::post('/ayam_sakit/perhitungan', 'Food_recommendedController@ayam_sakit_perhitungan')->name('rekomendasi.sakit_perhitungan');
Route::post('/ayam_sakit/hasil', 'Food_recommendedController@ayam_sakit_hasil')->name('rekomendasi.sakit_hasil');

Route::get('/harga_telur', 'Egg_PriceController@index')->name('telur.index');
Route::post('/harga_telur', 'Egg_PriceController@store')->name('telur.store');
Route::get('/rekap_harga_telur', 'Egg_PriceController@rekap')->name('telur.rekap');
