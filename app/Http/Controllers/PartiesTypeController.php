<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\partiestypeModel;
use App\Models\partiesModel;

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

    public function parties_type_edit(Request $request, $id){

        $data['getRecord']= partiestypeModel::find($id);
        return view('admin.parties_type.edit', $data);

    }

    public function parties_type_update(Request $request, $id){

        $save = partiestypeModel::find($id);
        $save->parties_type_name = $request->parties_type_name;
        $save->save();

        return redirect('admin/parties_type')->with('success', 'Record Updated Successfully!');
    }

    public function parties_type_delete(Request $request, $id){

        $data = partiestypeModel::find($id);
        $data->delete();
        return redirect('admin/parties_type')->with('error', 'Record deleted Successfully!');

    }

    public function parties(){
         return  view('admin.parties.list');
    } 

    public function parties_add(){
        $data['getPartiesType'] = partiestypeModel::get();
        return view('admin.parties.add',$data);
    }

}
