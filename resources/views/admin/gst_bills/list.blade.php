
@extends('admin.layouts.app')

@section('content')

<div class="app-content-header"> <!--begin::Container-->
    <div class="container-fluid">
        <div class="row">
            
            @include('_message') <!--begin::Row-->
                <h3 class="mb-0">GST BILLS</h3>
                
                <div class="col-md-12">

                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">GST Bills List</h3>
                            <a href="{{url('admin/gst_bills/add')}}" class="btn btn-primary float-end">Add New parties Type</a>
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Parties Type Name</th>
                                        <th style="width: 40px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                            </table>
                        </div> <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-end">
                                

                            
                            </ul>
                        </div>
                    </div> <!-- /.card -->
                    <!-- /.card -->
                </div> <!-- /.col -->
                
                
            </div>
            
        </div> <!--end::Row-->
    </div> <!--end::Container-->
</div>

@endsection