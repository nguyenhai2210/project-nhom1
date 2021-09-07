<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    function showLoginForm(){
        return view('auth.login');
    }

    function login(Request $request){
        $email = $request -> input('email');
        $password = $request -> input('password');

        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            //thanh cong
            return redirect('/checkout');
        }
        else{
            //that bai
            return redirect()-> back()->with(['error' => 'Sai email hoac mat khau']);
        }
    }

    function logout(){
        Auth::logout();
        redirect()->route('login');
    }
}
