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

Route::get('/', function () {
    return view('index');
});

// Contact
    Route::get('produk/form', 'ProdukController@index');
    Route::resource('produk/form/tambah', 'ProdukController@create');
    Route::post('produk/data/store', 'ProdukController@store');
    Route::get('produk/data', 'ProdukController@data');
    Route::get('produk/data/hapus/{id}', 'ProdukController@destroy');
    Route::get('/produk/edit/editdata/{id}', 'ProdukController@edit');
    Route::post('/produk/edit/editdata/update/{id}', 'ProdukController@update');


