@extends('admin.layouts.app')
@section('content')

<div class="row">
    <div class="card card-primary card-outline mb-4"> <!--begin::Header-->
        <div class="card-header">
            <div class="card-title">Add Parties Type</div>
        </div> <!--end::Header--> <!--begin::Form-->
        <form action="{{url('admin/parties_type/add')}}" method="POST">
            @csrf 
            <div class="card-body">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Parties Type Name <span style="color:red;">*</span></label> <input type="text" name="parties_type_name" class="form-control"  placeholder="Parties Type Name">
                    
                </div>
                
            </div> <!--end::Body--> <!--begin::Footer-->
            <div class="card-footer">
                 <button type="submit" class="btn btn-primary">Submit</button>
                 <a href="{{url('admin/parties_type')}}" class="btn btn-secondary float-end">Cancel</a>
                 </div> <!--end::Footer-->
        </form> <!--end::Form-->
    </div>
</div>
    
@endsection