
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
                            <a href="{{ url('admin/gst_bills/add') }}" class="btn btn-primary float-end">
                                Add New Parties Type
                            </a>
                                                    </div> <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Parties Type Name</th>
                                        <th>Invoice_date</th>
                                        <th>Invoice_number</th>
                                        <th>Total Amount</th>
                                        <th>Tex Amount</th>
                                        <th>Net Amount</th>
                                        <th>Action</th>
                                        {{-- <th>Item_description</th>
                                        <th>Parties Type Name</th>
                                        <th>Parties Type Name</th>
                                        <th>Parties Type Name</th>
                                        <th>Parties Type Name</th> 
                                        <th>Parties Type Name</th> 
                                        <th>Parties Type Name</th> 
                                        <th style="width: 40px">Action</th> --}}
                                    </tr>
                                </thead>
                                @php
                                    $totalAmount = 0;
                                @endphp
                                <tbody>
                                   
                                    @foreach ($getRecord as $value)
                                   
                                    @php
                                        $totalAmount = $totalAmount + $value->total_amount;
                                    @endphp
                                    <tr>
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->parties_type_name}}</td>
                                        <td>{{date('d-m-Y', strtotime($value->invoice_date))}}</td>
                                        <td>{{$value->invoice_number}}</td>
                                        <td>Rs. {{$value->total_amount}}</td>
                                        <td>{{$value->tax_amount}}</td>
                                        <td>{{$value->net_amount}}</td>
                                        <td>
                                            <a href="{{url('admin/gst_bills/edit/'.$value->id)}}" class="btn btn-info">
                                                <i class="bi bi-pen"></i>
                                            </a>
                                            
                                            <a href="{{url('admin/gst_bills/delete/'.$value->id)}}" class="btn btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                        {{-- <td>{{$value->item_description}}</td>
                                        <td>{{$value->cgst_rate}}</td>
                                        <td>{{$value->sgst_rate}}</td>
                                        <td>{{$value->igst_rate}}</td>
                                        <td>{{$value->cgst_amount}}</td>
                                        <td>{{$value->sgst_amount}}</td>
                                        <td>{{$value->igst_amount}}</td>
                                        <td>{{$value->declaration}}</td>
                                        <td>{{$value->created_at}}</td>
                                        <td>{{$value->updated_at}}</td> --}}


                                    </tr>
                                    @endforeach

                                    @if (!empty($totalAmount))
                                        <th colspan="4">Total (Rs)</th>
                                        <td>Rs. {{number_format($totalAmount,2)}}</td>
                                    @endif
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