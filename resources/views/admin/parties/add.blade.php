@extends('admin.layouts.app')
@section('content')

<div class="row">
    <div class="card card-primary card-outline mb-4"> <!--begin::Header-->
        <div class="card-header">
            <div class="card-title">Add Parties Type</div>
        </div> <!--end::Header--> <!--begin::Form-->
        <form action="{{url('admin/parties/add')}}" method="POST">
            @csrf 
            <div class="card-body">


                <div class="form-group">
                    <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Parties Type Name <span style="color:red;">*</span></label>
                        <select name="parties_type_id" id="">

                            <option value="">Select Parties Type Name</option>

                            @foreach ($getPartiesType as $value)

                            <option  value="{{$value->id}}">{{$value->parties_type_name}}</option>
                                
                            @endforeach
                        </select>
                        
                    </div>
                </div>


                <div class="form-group">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Full_name <span style="color:red;">*</span></label> <input type="text" name="full_name" class="form-control"  placeholder="Full_name" required>
                    
                </div>
            </div>


                <div class="form-group">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Phone_no <span style="color:red;">*</span></label> <input type="text" name="phone_no" class="form-control"  placeholder="Phone_no" required>
                    
                </div>
            </div>

                <div class="form-group">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Address <span style="color:red;">*</span></label> <input type="text" name="address" class="form-control"  placeholder="Address" required>  
                </div>

            </div>


                <div class="form-group">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Account_holder_name <span style="color:red;">*</span></label> <input type="text" name="account_holder_name" class="form-control"  placeholder="Account_holder_name" required>
                    
                </div>
            </div>

                <div class="form-group">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Account_no <span style="color:red;">*</span></label> <input type="text" name="account_no" class="form-control"  placeholder="Account_no" required>
                    
                </div>
            </div>


                <div class="form-group">
                <div class="mb-3">
                    <label for="bank_name" class="form-label">
                        Bank Name <span style="color:red;">*</span>
                    </label>
                    <input type="text" id="bank_name" name="bank_name" class="form-control" placeholder="Bank Name" required>
                </div>
            </div>
                


                <div class="form-group">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Ifsc_code <span style="color:red;">*</span></label> <input type="text" name="ifsc_code" class="form-control"  placeholcontrolder="Ifsc_code" required>
                    
                </div>
            </div>


                <div class="form-group">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Branch_Address <span style="color:red;">*</span></label> <input type="text" name="branch_address" class="form-control"  placeholder="Branch_Address" required>
                    
                </div>

                </div>    
                </div>

                
            <!--end::Body--> <!--begin::Footer-->
            <div class="card-footer">
                 <button type="submit" class="btn btn-primary">Submit</button>
                 <a href="{{url('admin/parties_type')}}" class="btn btn-secondary float-end">Cancel</a>
                 </div> <!--end::Footer-->
        </form> <!--end::Form-->
    </div>
</div>
    
@endsection