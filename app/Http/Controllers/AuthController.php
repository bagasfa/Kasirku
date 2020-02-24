<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function postLogin(Request $request){
<<<<<<< Updated upstream
    	if(Auth::attempt($request->only('email','password'))){
=======
    	if(Auth::attempt($request->only('username','password'))){
>>>>>>> Stashed changes
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
