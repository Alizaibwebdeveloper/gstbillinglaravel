
@extends('admin.layouts.app')

@section('content')

<div class="app-content-header"> <!--begin::Container-->
    <div class="container-fluid">
        <div class="row">
            
            @include('_message') <!--begin::Row-->
                <h3 class="mb-0">Parties Types</h3>
                
                <div class="col-md-12">

                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Parties Type List</h3>
                            <a href="{{url('admin/parties_type/add')}}" class="btn btn-primary float-end">Add New parties Type</a>
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
                                    @foreach ($getRecord as $value)
                                        
                                    <tr class="align-middle">
                                        <td>{{$value->id}}</td>
                                        <td style="width: 40%;">{{$value->parties_type_name}}</td>
                                        <td style="width: 40%;">
                                            <a href="{{ url('admin/parties_type/edit/' . $value->id) }}" class="btn btn-info"><i class="bi bi-pen"></i></a>

                                            <a href="{{url('admin/parties_type/delete/'.$value->id)}}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                        </td>
                                            
                                        
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div> <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-end">
                                {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}

                            
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