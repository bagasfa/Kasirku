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
Route::get('/','LandingController@home');
Route::get('/lMenu','LandingController@menu');
Route::get('/lContact','LandingController@contact');
Route::get('/lAbout','LandingController@about');

//Authentication
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postLogin','AuthController@postLogin');
Route::post('/register','AuthController@register');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => ['auth','checkStatus:1']], function(){
	// Export Data
	Route::get('/menu/menu_ex','pagesController@menuExcel');
	Route::get('/menu/menu_pdf','pagesController@menuPdf');
	Route::get('/laporan/laporan_ex','transaksiController@transExcel');
	Route::get('/laporan/laporan_pdf','transaksiController@transPdf');

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

	// ReDel Laporan
	Route::get('/laporan','pagesController@laporan');
	Route::get('/deleteLaporan','crudController@deleteLaporan');
});

Route::group(['middleware' => ['auth','checkStatus:1,2']], function(){
	Route::get('/dashboard','pagesController@dashboard');

	// Temporary Transaksi
	Route::post('/add_transaksi','transaksiController@add_transaksi');
	Route::get('/deleteTempo','transaksiController@deleteTempo');

	// Transaksi
	Route::get('/transaksi','pagesController@transaksi');
	Route::get('/transaksi_baru','transaksiController@transaksiBaru');
	Route::get('/transaksi/{id_transaksi}/detilTransaksi','pagesController@detilTransaksi');

	// Edit Profile
	Route::get('/profile/{id}','crudController@profile');
	Route::post('/profile/{id}/updateProfile','crudController@updateProfile');
	
});
?>