@extends('admin.layouts.app')
@section('content')

<div class="row">
    <div class="card card-primary card-outline mb-4"> <!--begin::Header-->
        <div class="card-header">
            <div class="card-title">My Account Update</div>
        </div> <!--end::Header--> <!--begin::Form-->
        <form action="{{url('admin/my_account/update')}}" method="POST">
            @csrf
            @include('_message')

            <div class="card-body">
                <div class="mb-3 form-group"> <label for="exampleInputEmail1" class="form-label">Name<span style="color:red;">*</span></label> <input type="text" name="name" value="{{$getRecord->name}}" class="form-control"  placeholder=" Enter Name">

                    <span style="color:red;">{{$errors->first('name')}}</span>
                    
                </div>

                <div class="mb-3 form-group"> <label for="exampleInputEmail1" class="form-label">Email<span style="color:red;">*</span></label> <input type="email" name="email" value="{{$getRecord->email}}" class="form-control"  placeholder=" Enter Email">
                    <span style="color:red;">{{$errors->first('name')}}</span>
                    
                </div>


                <div class="mb-3 form-group"> <label for="exampleInputEmail1" class="form-label">Password<span style="color:red;">*</span></label> <input type="text" name="password" value="" class="form-control"  placeholder=" Enter Password">
                    (Leave Blank if you are not changing the password)

                    <span style="color:red;">{{$errors->first('name')}}</span>
                    
                </div>
                
            </div> <!--end::Body--> <!--begin::Footer-->
            <div class="card-footer">
                 <button type="submit" class="btn btn-primary">Update</button>
                 <a href="{{url('admin/parties_type')}}" class="btn btn-secondary float-end">Cancel</a>
                 </div> <!--end::Footer-->
        </form> <!--end::Form-->
    </div>
</div>
    
@endsection