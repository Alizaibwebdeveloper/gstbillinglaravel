
@extends('admin.layouts.app')

@section('content')

<div class="app-content-header"> <!--begin::Container-->
    <div class="container-fluid">
        <div class="row">
            
            @include('_message') <!--begin::Row-->
                <h3 class="mb-0">Parties Types</h3>
                
                <div class="col-md-12">

                    <div class="card mt-4 mb-4">
                        <div class="card-header">
                            <h1 class="card-title">Search Parties Type</h1>
                        </div>
                        <form action="" method="get">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-2">
                                        <label for="id">ID</label>
                                        <input type="text" name="id" value="{{Request()->id}}" id="id" placeholder="ID" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="parties_type_name">Parties Type Name</label>
                                        <input type="text" name="parties_type_name" id="parties_type_name" value="{{Request()->parties_type_name}}" placeholder="Parties Type Name" class="form-control">
                                    </div>

                                    <div style="clear: both"></div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary mt-4" type="submit">
                                            Search
                                        </button>
                                        <a href="{{url('admin/parties_type')}}" class="btn mt-4 btn-success">Reset</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        
                </div>


                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Parties Type List</h3>
                            <a href="{{url('admin/parties_type/add')}}" class="btn btn-primary float-end">Add New parties Type</a>

                            <a href="{{url('admin/parties_type/pdf_generator')}}" class="btn btn-success float-end me-2">Pdf Generator</a>
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