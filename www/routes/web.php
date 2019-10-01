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

Route::get('/', 'HomeController@index');
Route::get('/encryptBase64', 'HomeController@encryptBase64');
Route::post('/do_encrypt','HomeController@encrypt');

Route::get('/decryptBase64', 'HomeController@decryptBase64');
Route::post('/do_decrypt', 'HomeController@decrypt');

Route::get('/qrcode', 'HomeController@qrcode');
Route::post('/do_qrcode', 'HomeController@do_qrcode');
