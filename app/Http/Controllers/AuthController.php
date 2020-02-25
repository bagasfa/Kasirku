<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\kasir;
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
            'nama_kasir' => 'required',
            'telp' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048'        
        ]);
        $foto = $request->file('foto');
        $extension = $foto->getClientOriginalExtension();
        Storage::disk('public')->put($foto->getFilename().'.'.$extension,  File::get($foto));

        $user = new User;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->status = $request->status;
        $user->save();

        $kasir = new kasir;
        $kasir->nama_kasir = $request->nama_kasir;
        $kasir->telp = $request->telp;
        $kasir->foto = $foto->getFilename().'.'.$extension;
        $kasir->save();
        return redirect('/')->with('message', 'Registrasi berhasil!');
    }

    public function postLogin(Request $request){
    	if(Auth::attempt($request->only('username','password'))){
    		return redirect('/dashboard');
    	}
    	// Message salah
    	return redirect('/');
    }

    public function logout(){
    	Auth::logout();
    	return redirect('/');
    }	
}
