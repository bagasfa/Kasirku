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
// Homepage
Route::get('/', 'AuthController@login')->name('login');
Route::get('/stisla', function () {
    return view('stisla.index');
});

//Authentication
Route::post('/postLogin','AuthController@postLogin');
Route::post('/register','AuthController@register');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => ['auth','checkStatus:1']], function(){
	// Show Data
	Route::get('/menu','pagesController@menu');
	Route::get('/kategori','pagesController@kategori');
	Route::get('/kasir','pagesController@kasir');
	Route::get('/menu/cariMenu','pagesController@cariMenu');

	// CRUD Menu
	Route::post('/menu', 'crudController@storeMenu');
	Route::get('/menu/tambah_menu', 'crudController@tambah_menu');
	Route::get('/menu/{barang}/deleteMenu', 'crudController@deleteMenu');
	Route::get('/menu/{barang}/editMenu','crudController@editMenu');
	Route::post('/menu/{barang}/updateMenu','crudController@updateMenu');

	// CRUD kategori
	Route::post('/kategori', 'crudController@storeCat');
	Route::get('/kategori/{kategori}/deleteCat', 'crudController@deleteCat');
	Route::get('/kategori/{kategori}/editCat','crudController@editCat');
	Route::post('/kategori/{kategori}/updateCat','crudController@updateCat');

	// CRUD Kasir
	Route::get('/kasir/tambah_kasir', 'crudController@tambah_kasir');
	Route::post('/kasir', 'crudController@storeKasir');
	Route::get('/kasir/{kasir}/deleteKasir', 'crudController@deleteKasir');
	Route::get('/kasir/{kasir}/editKasir','crudController@editKasir');
	Route::post('/kasir/{kasir}/updateKasir','crudController@updateKasir');
});

Route::group(['middleware' => ['auth','checkStatus:1,2']], function(){
	Route::get('/dashboard','pagesController@dashboard');
	Route::get('/transaksi','pagesController@transaksi');
});
?>