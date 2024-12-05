<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        if(Auth::user()->is_role ==1){
            return view('admin.dashboard');
        }
    }
}
