<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\barang;
use App\Transaksi;
use App\kategori;
use App\User;
use DB;

class crudController extends Controller
{
    public function tambah_menu(){
    	$kategori = kategori::all();
    	return view('Menu.tambah_menu')->with('cat',$kategori);
    }

    public function storeMenu(Request $request){
    	$barang = new barang;
    	$barang->nama_barang = $request->nama_barang;
    	$barang->id_kategori = $request->id_kategori;
    	$barang->stok = $request->stok;
    	$barang->harga_jual = $request->harga_jual;
    	$barang->save();
    	return redirect('/menu');
    }

    public function deleteMenu($id_barang){
        $barang = barang::findOrFail($id_barang);
        $barang->delete();
        return redirect('/menu');
    }

    public function editMenu($id_barang){
        $barang = barang::findOrFail($id_barang);
        $cat = kategori::all();
        return view('Menu.edit_menu', compact('barang','cat'));
    }

    public function updateMenu($id_barang, Request $request){
        $barang = barang::find($id_barang);
        $barang->id_barang = $request->id_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->id_kategori = $request->id_kategori;
        $barang->stok = $request->stok;
        $barang->harga_jual = $request->harga_jual;
        $barang->save();
        return redirect('/menu');
    }

    public function storeCat(Request $request){
    	$kategori = new kategori;
    	$kategori->nama_kategori = $request->nama_kategori;
    	$kategori->save();
    	return redirect('/kategori');
    }

    public function deleteCat($id_kategori){
    	$kategori = kategori::findOrFail($id_kategori);
    	$kategori->delete();
    	return redirect('/kategori');
    }

    public function editCat($id_kategori){
    	$kategori = kategori::findOrFail($id_kategori);
    	return view('Kategori.edit_cat', compact('kategori'));
    }

    public function updateCat($id_kategori, Request $request){
    	$kategori = kategori::find($id_kategori);
    	$kategori->id_kategori = $request->id_kategori;
    	$kategori->nama_kategori = $request->nama_kategori;
    	$kategori->save();
    	return redirect('/kategori');
    }

    public function tambah_kasir(){
        $kasir = User::all();
        return view('Kasir.tambah_kasir')->with('cs',$kasir);
    }

    public function storeKasir(Request $request){
        request()->validate([
            'username' => 'required',
            'password' => 'required',
            'status' => 'required',
            'nama_user' => 'required',
            'telp' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048'        
        ]);
        $photoName = 'kasir-'.date('Ymdhis').'.'.$request->foto->getClientOriginalExtension();
        $request->foto->move('Assets/images', $photoName);

        $kasir = new User;
        $kasir->username = $request->username;
        $kasir->password = md5($request->password);
        $kasir->status = $request->status;
        $kasir->nama_user = $request->nama_user;
        $kasir->telp = $request->telp;
        $kasir->foto = $photoName;
        $kasir->save();
        return redirect('/kasir')->with('message', 'Data berhasil Ditambahkan!');
    }

    public function deleteKasir($id){
        $gambar = User::where('id', $id)->first();
        File::delete('assets/images/'.$gambar->foto);
        $kasir = User::findOrFail($id);
        $kasir->delete();
        return redirect('/kasir');
    }

    public function editKasir($id)
    {
        $kasir = User::find($id);
        
        return view('Kasir.edit_kasir', compact('kasir'));
    }

    public function updateKasir($id, Request $request)
    {
        $kasir = User::find($id);
        $kasir->username = $request->username;
        $kasir->password = md5($request->password);
        $kasir->status = $request->status;
        $kasir->nama_user = $request->nama_user;
        $kasir->telp = $request->telp;
        if( $request->foto){
            $photoName = 'kasir-'.date('Ymdhis').'.'.$request->foto->getClientOriginalExtension();
            $request->foto->move('Assets/images', $photoName);
            $kasir->foto = $photoName;
        }
        $kasir->save();
        
        return redirect('/kasir');
    }

    public function profile($id){
        $profile = User::find($id);
        return view('Kasir.profile',compact('profile'));
    }

    public function updateProfile($id, Request $request){
        $kasir = User::find($id);
        $kasir->username = $request->username;
        $kasir->nama_user = $request->nama_user;
        $kasir->telp = $request->telp;
        if( $request->foto){
            $photoName = 'kasir-'.date('Ymdhis').'.'.$request->foto->getClientOriginalExtension();
            $request->foto->move('Assets/images', $photoName);
            $kasir->foto = $photoName;
        }
        $kasir->save();
        
        return redirect('/dashboard')->with('message','Data berhasil diperbarui!');
    }
}
