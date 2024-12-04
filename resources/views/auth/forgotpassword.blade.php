@extends('layouts.app')

@section('content')
    
    <div class="login-box">
        <div class="login-logo"> <a href="../index2.html"><b>Forgot</b>Password</a> </div> <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <form action="../index3.html" method="post">
                    <div class="input-group mb-3"> <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-text"> <span class="bi bi-envelope"></span> </div>
                    </div>
                     <!--begin::Row-->
                    <div class="row">
                        <div class="col-8">
                            <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault">
                                    Remember Me
                                </label> </div>
                        </div> <!-- /.col -->
                        <div class="col-4">
                            <div class="d-grid gap-2"> <button type="submit" class="btn btn-primary">Forgot</button> </div>
                        </div> <!-- /.col -->
                    </div> <!--end::Row-->
                </form>
                
                <p class="mb-1"> <a href="{{url('/')}}">Login</a> </p>
                <p class="mb-0"> <a href="{{url('register')}}" class="text-center">
                        Register a new membership
                    </a> </p>
            </div> <!-- /.login-card-body -->
        </div>
    </div> <!-- /.login-box --> <!--begin::Third Party Plugin(OverlayScrollbars)-->
@endsection
   