<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PartiesTypeController extends Controller
{
    public function parties_type(){

        return view('admin.parties_type.list');
    }

    public function parties_type_add(){

        return view('admin.parties_type.add');

    }
}
