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
                    <h3 class="card-title">Product Detail information</h3>
                </div>
                <div class="card-body">
                    <p class="text-center text-success">{{session('message')}}</p>
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="">
                            <tr>
                                <th>Product ID</th>
                                <td>{{$product->id}}</td>
                            </tr>
                            <tr>
                                <th>Product Code</th>
                                <td>{{$product->code}}</td>
                            </tr>
                            <tr>
                                <th>Product Name</th>
                                <td>{{$product->name}}</td>
                            </tr>
                            <tr>
                                <th>Product Category</th>
                                <td>{{$product->category->name}}</td>
                            </tr>
                            <tr>
                                <th>Product Sub Category</th>
                                <td>{{$product->subCategory->name}}</td>
                            </tr>
                            <tr>
                                <th>Product Brand</th>
                                <td>{{$product->brand->name}}</td>
                            </tr>
                            <tr>
                                <th>Product Unit</th>
                                <td>{{$product->unit->name}}</td>
                            </tr>
                            <tr>
                                <th>Product Price</th>
                                <td><b>Regular Price</b>{{$product->regular_price}}, <b>Selling Price</b>{{$product->selling_price}}</td>
                            </tr>
                            <tr>
                                <th>Product Stock Amount</th>
                                <td>{{$product->stock_amount}}</td>
                            </tr>
                            <tr>
                                <th>Product Short Description</th>
                                <td>{{$product->short_description}}</td>
                            </tr>
                            <tr>
                                <th>Product Long Description</th>
                                <td>{!! $product->long_description !!}</td>
                            </tr>
                            <tr>
                                <th>Product Image</th>
                                <td><img  src="{{asset($product->image)}}" alt="" height="150" width="188"></td>
                            </tr>
                            <tr>
                                <th>Product Trending Status</th>
                                <td>{{$product->trending_status}} </td>
                            </tr>
                            <tr>
                                <th>Product Sales Count</th>
                                <td>{{$product->slaes_count}}</td>
                            </tr>
                            <tr>
                                <th>Product Total View</th>
                                <td>{{$product->hit_count}}</td>
                            </tr>
                            <tr>
                                <th>Product Publication Status</th>
                                <td>{{$product->publication_status}}</td>
                            </tr>
                            <tr>
                                <th>Product Other Images</th>
                                @foreach($product->otherImages as $otherImage)
                                <td><img  src="{{asset($otherImage->image)}}" alt="" height="150" width="188"></td>
                                @endforeach
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

@endsection
