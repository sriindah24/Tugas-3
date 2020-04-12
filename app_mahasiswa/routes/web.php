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


Route::resource('barang','BarangController');
//Route::get('barang','BarangController@edit');
//Route::post('barang','BarangController@store');
//Route::put('barang','BarangController@update');



