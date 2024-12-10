@extends('admin.layouts.app')
@section('content')

<div class="row">
    <div class="card card-primary card-outline mb-4"> <!--begin::Header-->
        <div class="card-header">
            <div class="card-title">Update Parties Type</div>
        </div> <!--end::Header--> <!--begin::Form-->
        <form action="{{url('admin/parties/edit/'. $getRecord->id)}}" method="POST">
            @csrf 
            <div class="card-body">


                <div class="form-group">
                    <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Parties Type Name <span style="color:red;">*</span></label>
                        <select name="parties_type_id" id="">

                            <option value="">Select Parties Type Name</option>

                            @foreach ($getPartiesType as $value)

                            <option {{ ($getRecord->parties_type_id == $value->id) ? 'selected' : '' }} value="{{ $value->id }}">{{ $value->parties_type_name }}</option>

                                
                            @endforeach
                        </select>
                        
                    </div>
                </div>


                <div class="form-group">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Full_name <span style="color:red;">*</span></label> <input type="text" name="full_name" class="form-control" value="{{$getRecord->full_name}}"  placeholder="Full_name" required>
                    
                </div>
            </div>


                <div class="form-group">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Phone_no <span style="color:red;">*</span></label> <input type="text" name="phone_no" class="form-control" value="{{$getRecord->phone_no}}"  placeholder="Phone_no" required>
                    
                </div>
            </div>

                <div class="form-group">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Address <span style="color:red;">*</span></label> <input type="text" name="address" class="form-control" value="{{$getRecord->address}}"  placeholder="Address" required>  
                </div>

            </div>


                <div class="form-group">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Account_holder_name <span style="color:red;">*</span></label> <input type="text" name="account_holder_name" value="{{$getRecord->account_holder_name}}" class="form-control"  placeholder="Account_holder_name" required>
                    
                </div>
            </div>

                <div class="form-group">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Account_no <span style="color:red;">*</span></label> <input type="text" name="account_no" class="form-control" value="{{$getRecord->account_no}}"  placeholder="Account_no" required>
                    
                </div>
            </div>


                <div class="form-group">
                <div class="mb-3">
                    <label for="bank_name" class="form-label">
                        Bank Name <span style="color:red;">*</span>
                    </label>
                    <input type="text" id="bank_name" name="bank_name" value="{{$getRecord->bank_name}}" class="form-control" placeholder="Bank Name" required>
                </div>
            </div>
                


                <div class="form-group">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Ifsc_code <span style="color:red;">*</span></label> <input type="text" name="ifsc_code" class="form-control" value="{{$getRecord->ifsc_code}}"  placeholcontrolder="Ifsc_code" required>
                    
                </div>
            </div>


                <div class="form-group">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Branch_Address <span style="color:red;">*</span></label> <input type="text" name="branch_address" class="form-control" value="{{$getRecord->branch_address}}"  placeholder="Branch_Address" required>
                    
                </div>

                </div>    
                </div>

                
            <!--end::Body--> <!--begin::Footer-->
            <div class="card-footer">
                 <button type="submit" class="btn btn-primary">Update</button>
                 <a href="{{url('admin/parties')}}" class="btn btn-secondary float-end">Cancel</a>
                 </div> <!--end::Footer-->
        </form> <!--end::Form-->
    </div>
</div>
    
@endsection