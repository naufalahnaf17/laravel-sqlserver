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

Route::get('/' , 'CekController@index');
Route::post('/tambah' , 'CekController@tambah');
Route::get('/hapus/{id}' , 'CekController@hapus');
Route::get('/edit/{id}' , 'CekController@edit');
Route::post('edit/update' , 'CekController@store');
