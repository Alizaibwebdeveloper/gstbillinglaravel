
@extends('layouts.app')

@section('content')
    
    <div class="login-box">
        <div class="login-logo"> <a href="../index2.html"><b>GST</b>Billing</a> </div> <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Register</p>
                @include('_message')
                <form action="{{url('register_post')}}" method="post">
                    @csrf
                    <div class="input-group mb-3"> <input type="text" value="{{old('name')}}" name="name"  class="form-control" placeholder="Username" required>
                        <div class="input-group-text"> <span class="bi bi-person"></span> </div>
                    </div>

                    <span style="color:red;">{{$errors->first('name')}}</span>


                    <div class="input-group mb-3"> <input type="email" value="{{old('email')}}" name="email" class="form-control" placeholder="Email" required>
                        <div class="input-group-text"> <span class="bi bi-envelope"></span> </div>
                    </div>

                    <span style="color:red;">{{$errors->first('email')}}</span>


                    <div class="input-group mb-3"> <input type="password" value="{{old('password')}}" name="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-text"> <span class="bi bi-lock-fill"></span> </div>
                    </div> <!--begin::Row-->

                    <span style="color:red;">{{$errors->first('password')}}</span>

                    <div class="row">
                        <div class="col-8">
                            <!-- /.col -->
                        <div class="col-4">
                            <div class="d-grid gap-2"> <button type="submit"  class="btn btn-primary">Register</button> </div>
                        </div> <!-- /.col -->
                    </div> <!--end::Row-->
                </form>
                
                <p class="mb-1"> <a href="{{url('/forgot-password')}}">I forgot my password</a> </p>
                <p class="mb-0"> <a href="{{url('/')}}" class="text-center">
                        Login
                    </a> </p>
            </div> <!-- /.login-card-body -->
        </div>
    </div> <!-- /.login-box --> <!--begin::Third Party Plugin(OverlayScrollbars)-->
@endsection
   