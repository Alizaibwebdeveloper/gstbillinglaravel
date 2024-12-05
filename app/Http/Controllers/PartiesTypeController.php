<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\partiestypeModel;

class PartiesTypeController extends Controller
{
    public function parties_type(){

        $data['getRecord'] =  partiestypeModel::getRecordAll();
        return view('admin.parties_type.list', $data);
    }

    public function parties_type_add(){

        return view('admin.parties_type.add');

    }

    public function parties_type_insert(Request $request){

        $request->validate([
            'parties_type_name' => 'required|unique:parties_type,parties_type_name',
        ]);
        
        $partiesname = new partiestypeModel();
        $partiesname->parties_type_name = $request->parties_type_name;
        $partiesname->save();

        return redirect('admin/parties_type')->with('success', 'Record Added Successfully!');
    }
}
