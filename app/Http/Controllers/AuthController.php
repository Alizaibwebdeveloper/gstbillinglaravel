<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){

        $data['meta_title'] = 'Login';
        return view('auth.login', $data);
    }

    public function register(){

        $data['meta_title'] = 'Register';
        return view('auth.register', $data);
    }

    public function forgotpassword(){

        $data['meta_title'] = 'Forgot-Password';
        return view('auth.forgotpassword', $data);
    }
}
