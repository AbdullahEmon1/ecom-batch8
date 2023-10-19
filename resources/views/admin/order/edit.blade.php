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
                <li class="breadcrumb-item active" aria-current="page">Edit Order</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Order Edit Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-center text-success">{{session('message')}}</p>
                    <form action="{{route('admin.update-order', ['id' => $order->id])}}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-md-3">Order Total</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$order->order_total}}" readonly/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Customer Info</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$order->customer->name}}" readonly/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Delivery Address</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="delivery_address">{{$order->delivery_address}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Courier Info</label>
                            <div class="col-md-9">
                                <select class="form-control" name="courier_id">
                                    <option value=""> -- Select Courier Info -- </option>
                                    <option value="1" {{$order->courier_id == 1 ? 'selected' : ''}}>S A Poribahan</option>
                                    <option value="2" {{$order->courier_id == 2 ? 'selected' : ''}}>Sundorbahan</option>
                                    <option value="3" {{$order->courier_id == 3 ? 'selected' : ''}}>Stead Fast</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Order Status</label>
                            <div class="col-md-9">
                                <select class="form-control" required name="order_status">
                                    <option value="" disabled selected> -- Select Order Status -- </option>
                                    <option value="Pending" {{$order->order_status == 'Pending' ? 'selected' : ''}}>Pending</option>
                                    <option value="Cancel" {{$order->order_status == 'Cancel' ? 'selected' : ''}}>Cancel</option>
                                    <option value="Processing" {{$order->order_status == 'Processing' ? 'selected' : ''}}>Processing</option>
                                    <option value="Complete" {{$order->order_status == 'Complete' ? 'selected' : ''}}>Complete</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="Update Order Status"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

@endsection
