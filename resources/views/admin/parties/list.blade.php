
@extends('admin.layouts.app')

@section('content')

<div class="app-content-header"> <!--begin::Container-->
    <div class="container-fluid">
        <div class="row">
            
            @include('_message') <!--begin::Row-->
                <h3 class="mb-0">Parties</h3>
                
                <div class="col-md-12">

                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Parties List</h3>
                            <a href="{{url('admin/parties/add')}}" class="btn btn-primary float-end">Add New parties</a>
                        </div> <!-- /.card-header -->
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Parties Type ID</th>
                                                <th>Full Name</th>
                                                <th>Phone No</th>
                                                <th>Address</th>
                                                <th>Account Holder Name</th>
                                                <th>Account No</th>
                                                <th>Bank Name</th>
                                                <th>IFSC Code</th>
                                                <th>Branch Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($getRecord as $value)
                                            <tr>
                                                <td>{{$value->id}}</td>
                                                <td>{{$value->parties_type_id}}</td>
                                                <td>{{$value->full_name}}</td>
                                                <td>{{$value->phone_no}}</td>
                                                <td>{{$value->address}}</td>
                                                <td>{{$value->account_holder_name}}</td>
                                                <td>{{$value->account_no}}</td>
                                                <td>{{$value->bank_name}}</td>
                                                <td>{{$value->ifsc_code}}</td>
                                                <td>{{$value->branch_address}}</td>
                                                <td>
                                                    <a href="{{url('admin/parties/edit/'.$value->id)}}" class="btn btn-info">
                                                        <i class="bi bi-pen"></i>
                                                    </a>
                                                    <a href="{{url('admin/parties/delete/'.$value->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">
                                                        <i class="bi bi-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-end">
                                {!! $getRecord->appends(request()->except('page'))->links() !!}

                            
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