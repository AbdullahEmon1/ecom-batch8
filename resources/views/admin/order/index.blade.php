@extends('layouts.app')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Order Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Order</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Order</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All Order information</h3>
                </div>
                <div class="card-body">
                    <p class="text-center text-success">{{session('message')}}</p>
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">SL NO</th>
                                <th class="wd-15p border-bottom-0">Order Id</th>
                                <th class="wd-20p border-bottom-0">customer Info</th>
                                <th class="wd-15p border-bottom-0">Order Date</th>
                                <th class="wd-15p border-bottom-0">Order Total</th>
                                <th class="wd-15p border-bottom-0">Order Status</th>
                                <th class="wd-25p border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->customer->name.'('.$order->customer->mobile.')'}}</td>
                                    <td>{{$order->order_date}}</td>
                                    <td>{{$order->order_total}}</td>
                                    <td>{{$order->order_status}}</td>
                                    <td>
                                        <a href="{{route('admin.order-detail', ['id' => $order->id])}}" class="btn btn-info btn-sm" title="Order Detail Info">
                                            <i class="fa fa-bookmark-o"></i>
                                        </a>
                                        <a href="{{route('admin.order-edit', ['id' => $order->id])}}" class="btn btn-success btn-sm {{$order->order_status == 'Complete' ? 'disabled' : ''}}" title="Order Edit">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{route('admin.order-invoice', ['id' => $order->id])}}" class="btn btn-primary btn-sm" title="Order Invoice">
                                            <i class="fa fa-book"></i>
                                        </a>
                                        <a href="{{route('admin.download-order-invoice', ['id' => $order->id])}}" target="_blank" class="btn btn-warning btn-sm" title="Print Invoice">
                                            <i class="fa fa-print"></i>
                                        </a>
                                        <a href="{{route('admin.order-delete', ['id' => $order->id])}}" onclick="return confirm('Are you sure to delete this.')" title="Order Delete" class="{{$order->order_status == 'Cancel' ? 'btn btn-danger btn-sm' : 'disabled btn btn-danger btn-sm'}}">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

@endsection
