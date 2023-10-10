<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    //
    function login(){   
        return view('welcome');
    }
function auth(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        return redirect('home');
        // $credentials=$request->only('email','password');
        // if (auth::attempt($credentials)){
        //     return redirect('home');
        // }
        // return redirect()->back
    }
        function logout(){
        Auth::logout();
        return redirect('login');
    }
}
