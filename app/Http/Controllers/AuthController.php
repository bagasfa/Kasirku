<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\User;
use DB;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function register(Request $request){
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
        $kasir->date_created = now();
        $kasir->save();
        return redirect('/login')->with('message', 'Registrasi berhasil!');
    }

    public function postLogin(Request $request){
    	if(Auth::attempt($request->only('username','password'))){
    		return redirect('/dashboard');
    	}
    	// Message salah
    	return redirect('/login')->with('message', 'Username atau Password anda Salah!');
    }

    public function logout(){
    	Auth::logout();
    	return redirect('/');
    }	
}
