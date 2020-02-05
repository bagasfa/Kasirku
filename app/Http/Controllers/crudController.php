<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use App\kategori;
use DB;

class crudController extends Controller
{
    public function tambah_menu(){
    	$kategori = kategori::all();
    	return view('tambah_menu')->with('cat',$kategori);
    }

    public function storeMenu(Request $request){
    	$barang = new barang;
    	$barang->timestamps=false;
    	$barang->nama_barang = $request->nama_barang;
    	$barang->id_kategori = $request->id_kategori;
    	$barang->stok = $request->stok;
    	$barang->harga_jual = $request->harga_jual;
    	$barang->save();
    	return redirect('/');
    }

    public function storeCat(Request $request){
    	$kategori = new kategori;
    	$kategori->timestamps = false;
    	$kategori->nama_kategori = $request->nama_kategori;
    	$kategori->save();
    	return redirect('kategori');
    }

    public function deleteCat($id_kategori){
    	$kategori = kategori::findOrFail($id_kategori);
    	$kategori->delete();
    	return redirect('kategori');
    }

    public function editCat($id_kategori){
    	$halaman = 'kategori';
    	$kategori = kategori::findOrFail($id_kategori);
    	return view('edit_cat', compact('halaman','kategori'));
    }

    public function updateCat($id_kategori, Request $request){
    	$halaman = 'kategori';
    	$kategori = kategori::findOrFail($id_kategori);
    	$kategori->id_kategori = $request->id_kategori;
    	$kategori->nama_kategori = $request->nama_kategori;
    	$kategori->save();
    	return redirect('kategori');
    }
}
