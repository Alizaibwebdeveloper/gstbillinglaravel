
@extends('layouts.app')

@section('content')
    
    <div class="login-box">
        <div class="login-logo"> <a href="../index2.html"><b>GST</b>Billing</a> </div> <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Register</p>
                <form action="../index3.html" method="post">

                    <div class="input-group mb-3"> <input type="text" name="name" class="form-control" placeholder="Username">
                        <div class="input-group-text"> <span class="bi bi-person"></span> </div>
                    </div>

                    <div class="input-group mb-3"> <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-text"> <span class="bi bi-envelope"></span> </div>
                    </div>
                    <div class="input-group mb-3"> <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-text"> <span class="bi bi-lock-fill"></span> </div>
                    </div> <!--begin::Row-->
                    <div class="row">
                        <div class="col-8">
                            <!-- /.col -->
                        <div class="col-4">
                            <div class="d-grid gap-2"> <button type="submit" class="btn btn-primary">Register</button> </div>
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
   