@extends('website.master')

@section('body')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Customer</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href=""><i class="lni lni-home"></i> Home</a></li>
                        <li>Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="account-login section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <a href="{{route('customer.dashboard')}}" class="list-group-item text-muted">Dashboard</a>
                            <a href="{{route('customer.profile')}}" class="list-group-item text-muted">Profile</a>
                            <a href="{{route('customer.order')}}" class="list-group-item text-muted">Order</a>
                            <a href="{{route('customer.payment')}}" class="list-group-item text-muted">Payment</a>
                            <a href="{{route('customer.change-password')}}" class="list-group-item text-muted">Change Password</a>
                            <a href="{{route('customer.logout')}}" class="list-group-item text-muted">Logout</a>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-body">
                        <h4>My Order</h4>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Order Id</th>
                                <th>Order Total</th>
                                <th>Order Date</th>
                                <th>Order Status</th>
                                <th>Payment Status</th>
                                <th>Delivery Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$order->id}}</td>
                                <td>{{$order->order_total}}</td>
                                <td>{{$order->order_date}}</td>
                                <td>{{$order->order_status}}</td>
                                <td>{{$order->payment_status}}</td>
                                <td>{{$order->delivery_status}}</td>
                                <td>
                                    <a href="{{route('customer.order-detail',['id'=>$order->id])}}" class="btn btn-success btn-sm">Detail</a>
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
@endsection


