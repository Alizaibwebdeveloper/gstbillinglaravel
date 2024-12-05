
@extends('admin.layouts.app')

@section('content')

<div class="app-content-header"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Row-->
        <div class="row">
            
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
                                    <tr class="align-middle">
                                        <td>1.</td>
                                        <td style="width: 40%;">Update software</td>
                                        <td style="width: 40%;">
                                            <a href="" class="btn btn-info"><i class="bi bi-pen"></i></a>
                                            <a href="" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                        </td>
                                            
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-end">
                                <li class="page-item"> <a class="page-link" href="#">&laquo;</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">&raquo;</a> </li>
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