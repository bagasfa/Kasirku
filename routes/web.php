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
Route::get('/','pagesController@menu');
Route::get('/stisla', function () {
    return view('stisla.index');
});

// Show Data
Route::get('/kategori','pagesController@kategori');

// CRUD Menu
Route::get('/tambah_menu', 'crudController@tambah_menu');
Route::post('/', 'crudController@storeMenu');


// CRUD kategori
Route::post('kategori', 'crudController@storeCat');
Route::get('kategori/{kategori}/deleteCat', 'crudController@deleteCat');
Route::get('kategori/{kategori}/editCat','crudController@editCat');
Route::post('kategori/{kategori}/updateCat','crudController@updateCat');
?>