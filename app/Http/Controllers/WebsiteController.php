<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    private $products,$product;
    public function index()
    {
        $this->products = Product::where('trending_status',1)->get(['id','name','selling_price','image']);

        return view('website.home.index',[
            'products' => $this->products,
        ]);
    }
    public function categoryProduct($id)
    {
        $this->products = Product::where('category_id',$id)->orderBY('id','desc')->get();
        return view('website.category.index',['products' => $this->products]);
    }
    public function productDetail($id)
    {
        $this->product = Product::find($id);
        return view('website.product.index',['product' => $this->product]);
    }
}
