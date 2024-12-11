<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\partiestypeModel;
use App\Models\GstBillsModel;
use Illuminate\Http\Request;

class GSTBillsController extends Controller
{
    public function gst_bills(){

        $data['getRecord'] = GstBillsModel::getRecordAll();
        return view('admin.gst_bills.list', $data);
    }

    public function gst_bills_add(){

        $data['getPartiesType'] = partiestypeModel::get();
        return view('admin.gst_bills.add', $data);
    }

    public function gst_bills_insert(Request $request){
        $data = new GstBillsModel();
        $data->parties_type_id = $request->parties_type_id;
        $data->invoice_date = $request->invoice_date;
        $data->invoice_number = $request->invoice_number;
        $data->item_description = $request->item_description;
        $data->total_amount = $request->total_amount;
        $data->cgst_rate = $request->cgst_rate;
        $data->sgst_rate = $request->sgst_rate;
        $data->igst_rate = $request->igst_rate;
        $data->cgst_amount = $request->cgst_amount;
        $data->sgst_amount = $request->sgst_amount;
        $data->igst_amount = $request->igst_amount;
        $data->tax_amount = $request->tax_amount;
        $data->net_amount = $request->net_amount;
        $data->declaration = $request->declaration;
        $data->save();

        return redirect('admin/gst_bills')->with('success', 'Recorded Successfully Created!');

    }

    public function gst_bills_edit($id){

        $data['getPartiesType'] = partiestypeModel::get();
        $data['getRecord'] = GstBillsModel::find($id);
        return view('admin.gst_bills.edit', $data);
    }

    public function gst_bills_update(Request $request, $id){

        $updatedata = GstBillsModel::find($id);
        $updatedata->parties_type_id = $request->parties_type_id;
        $updatedata->invoice_date = $request->invoice_date;
        $updatedata->invoice_number = $request->invoice_number;
        $updatedata->item_description = $request->item_description;
        $updatedata->total_amount = $request->total_amount;
        $updatedata->cgst_rate = $request->cgst_rate;
        $updatedata->sgst_rate = $request->sgst_rate;
        $updatedata->igst_rate = $request->igst_rate;
        $updatedata->cgst_amount = $request->cgst_amount;
        $updatedata->sgst_amount = $request->sgst_amount;
        $updatedata->igst_amount = $request->igst_amount;
        $updatedata->tax_amount = $request->tax_amount;
        $updatedata->net_amount = $request->net_amount;
        $updatedata->declaration = $request->declaration;
        $updatedata->save();

        return redirect('admin/gst_bills')->with('success', 'Record Updated Succcessfully!');

    }

    public function gst_bills_delete($id){

        $data = GstBillsModel::find($id);
        $data->delete();

        return redirect('admin/gst_bills')->with('error', 'Record deleted Succcessfully!');


    }
}
