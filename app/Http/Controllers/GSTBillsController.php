<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\partiestypeModel;
use Illuminate\Http\Request;

class GSTBillsController extends Controller
{
    public function gst_bills(){

        return view('admin.gst_bills.list');
    }

    public function gst_bills_add(){

        $data['getPartiesType'] = partiestypeModel::get();
        return view('admin.gst_bills.add', $data);
    }
}
