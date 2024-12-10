@extends('admin.layouts.app')
@section('content')

<div class="row">
    <div class="card card-primary card-outline mb-4"> <!--begin::Header-->
        <div class="card-header">
            <div class="card-title">Add GST Bills</div>
        </div> <!--end::Header--> <!--begin::Form-->
        <form action="{{url('admin/gst_bills/add')}}" method="POST">
            @csrf 
            <div class="card-body ">
                
                <select name="" class="form-control">
                    @foreach ($getPartiesType as $value)
                        
                    <option value="{{$value->id}}">{{$value->parties_type_name}}</option>

                    @endforeach

                </select>
                </div>


                <div class="card-body">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Invoice Date <span style="color:red;">*</span></label> <input type="date" name="invoice_date" class="form-control"  placeholder="Invoice Date">
                    
                </div>

                </div>

                <div class="card-body">
                <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label">Invoice No<span style="color:red;">*</span></label> <input type="text" name="invoice_number" class="form-control"  placeholder="Invoice Number">
                    
                </div>

            </div>


            <div class="card-body">
                <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label">Item Description<span style="color:red;">*</span></label>
                <textarea name="item_description"   class="form-control"  placeholder="Item Description">

                </textarea>

                </div>

            </div>



            <div class="card-body">
                <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label">Total Amount<span style="color:red;">*</span></label> <input type="number" name="total_amount" class="form-control"  placeholder="Total Amount">
                    
                </div>

            </div>


                <div class="card-body">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">CGST Rate<span style="color:red;">*</span></label> <input type="number" name="cgst_rate" class="form-control"  placeholder="CGST Rate">
                    
                </div>

            </div>


                <div class="card-body">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">SGST Rate<span style="color:red;">*</span></label> <input type="number" name="sgst_rate" class="form-control"  placeholder="SGST Rate">
                    
                </div>
            </div>

               
                <div class="card-body">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">IGST Rate<span style="color:red;">*</span></label> <input type="number" name="igst_rate" class="form-control"  placeholder="IGST Rate">
                    
                </div>
            </div>


            <div class="card-body">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">CGST Amount<span style="color:red;">*</span></label> <input type="number" name="cgst_amount" class="form-control"  placeholder="CGST Amount">
                    
                </div>

            </div>


            <div class="card-body">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">SGST Amount<span style="color:red;">*</span></label> <input type="number" name="sgst_amount" class="form-control"  placeholder="SGST Amount">
                    
                </div>

            </div>


                <div class="card-body">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">IGST Amount<span style="color:red;">*</span></label> <input type="number" name="igst_amount" class="form-control"  placeholder="IGST Amount">
                    
                </div>

            </div>


                <div class="card-body">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Tax Amount<span style="color:red;">*</span></label> <input type="number" name="tax_amount" class="form-control"  placeholder="Tax Amount">
                    
                </div>
            </div>


            <div class="card-body">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Net Amount<span style="color:red;">*</span></label> <input type="number" name="net_amount" class="form-control"  placeholder="Net Amount">
                    
                </div>
            </div>


            <div class="card-body">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Declaration<span style="color:red;">*</span></label>
               <textarea name="declaration"   class="form-control"  placeholder="Declaration">

               </textarea>

               </div>
            </div>

                
            <div class="card-footer">
                 <button type="submit" class="btn btn-primary">Submit</button>
                 <a href="{{url('admin/gst_bills')}}" class="btn btn-secondary float-end">Cancel</a>
                 </div> <!--end::Footer-->
        </form> <!--end::Form-->
    </div>
</div> <!--end::Body--> <!--begin::Footer-->

    
@endsection