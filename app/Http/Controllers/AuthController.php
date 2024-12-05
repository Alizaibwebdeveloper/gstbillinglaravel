<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Str;
use Session;
use Auth;

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

    public function register_post(Request $request){

        $user = request()->validate([

            'name'=> 'required',
            'email'=> 'required|unique:users',
            'password'=> 'required|min:6'

        ]);
        $user =  new User();
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(50);
        $user->save();

     
        return redirect('/')->with('success', 'Registration Successfully!');
        

    }
    public function login_post(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
            if (Auth::user()->is_role == 1) {
                return redirect()->intended('admin/dashboard');
            } else {
                return redirect('/')->with('error', 'Admin Not Available');
            }
        } else {
            return redirect()->back()->with('error', 'Plzz Write Correct Credentails');
        }
    }
    
}
