@extends('layouts.app')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Product Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Product</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All Product information</h3>
                </div>
                <div class="card-body">
                    <p class="text-center text-success">{{session('message')}}</p>
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                            <tr>
                            <tr>
                                <th class="wd-15p border-bottom-0">SL NO</th>
                                <th class="wd-15p border-bottom-0">Name</th>
                                <th class="wd-15p border-bottom-0">Image</th>
                                <th class="wd-15p border-bottom-0">Category</th>
                                <th class="wd-20p border-bottom-0">Stock Amount</th>
                                <th class="wd-25p border-bottom-0">Action</th>
                            </tr>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>
                                        <img src="{{asset($product->image)}}" alt="" height="50" width="70"/>
                                    </td>
                                    <td>{{$product->category->name}}</td>
                                    <td>{{$product->stock_amount}}</td>
                                    <td>
                                        <a href="{{route('product.show',$product->id)}}" class="btn btn-info btn-sm">
                                            <i class="fa fa-book"></i>
                                        </a>
                                        <a href="{{route('product.edit',$product->id)}}" class="btn btn-success btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{route('product.destroy',$product->id)}}" id="deleteForm{{$product->id}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" data-id="{{$product->id}}" class="btn btn-danger btn-sm delete-btn">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
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
