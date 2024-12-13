<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\partiestypeModel;
use App\Models\partiesModel;
use Barryvdh\DomPDF\Facade\Pdf;

class PartiesTypeController extends Controller
{
    public function parties_type(Request $request){

        $data['getRecord'] = PartiestypeModel::getRecordAll($request);
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

    public function parties()
{
    $data['getRecord'] = partiesModel::getRecordAll(); // Fetch paginated records using static method
    return view('admin.parties.list', $data); // Pass data to the view
}
 

    public function parties_add(){
        $data['getPartiesType'] = partiestypeModel::get();
        return view('admin.parties.add',$data);
    }

    public function parties_insert(Request $request){

        $data = new partiesModel();
        $data->parties_type_id = $request->parties_type_id;
        $data->full_name = $request->full_name;
        $data->phone_no = $request->phone_no;
        $data->address = $request->address;
        $data->account_holder_name = $request->account_holder_name;
        $data->account_no = $request->account_no;
        $data->bank_name = $request->bank_name;
        $data->ifsc_code = $request->ifsc_code;
        $data->branch_address = $request->branch_address;
        $data->save();

        return redirect('/admin/parties')->with('success', 'Record Created Successfully!');


    }

    public function parties_edit(Request $request, $id){

        $data['getRecord'] = partiesModel::SinglegetRecord($id);
        $data['getPartiesType'] = partiestypeModel::get();
        return view('admin.parties.edit', $data);

    }

    public function parties_update(Request $request, $id){

        $data = partiesModel::find($id);
        $data->parties_type_id = $request->parties_type_id;
        $data->full_name = $request->full_name;
        $data->phone_no = $request->phone_no;
        $data->address = $request->address;
        $data->account_holder_name = $request->account_holder_name;
        $data->account_no = $request->account_no;
        $data->bank_name = $request->bank_name;
        $data->ifsc_code = $request->ifsc_code;
        $data->branch_address = $request->branch_address;
        $data->save();

        return redirect('/admin/parties')->with('success', 'Record Updated Successfully!');


    }

    public function parties_delete($id){
        $data = partiesModel::find($id);
        $data->delete();

        return redirect('/admin/parties')->with('error', 'Record deleted  Successfully!');


    }

    public function parties_type_pdf_generator(){

        $getRecordAll = partiestypeModel::get();
        $data = [

            'title' => 'Welcome to My Gst Billing Project ( Developed By Ali zaib)',
            'date'=> date('m/d/Y'),
            'parties'=> $getRecordAll,
        ];

        $pdf =Pdf::loadView('PartiesTypePDF', $data);
        return $pdf->download('gstbillingproject(Ali zaib).pdf');


    }

}
