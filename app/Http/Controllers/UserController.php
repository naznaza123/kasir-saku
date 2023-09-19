<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function register(){
        return view('register');
    }
    function create(Request $request){
        
        $validate = $this->validate($request,[
            'nama' => 'required|string',
            'email' => 'required|string',
            'password' => 'required_with:confirm_password|min:8|same:confirm_password',
        ]);
        $validate['password']=bcrypt($request->password);
        User::create($validate);
        return redirect('login');
    }
}
