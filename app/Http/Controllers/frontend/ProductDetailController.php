<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductDetailController extends Controller
{
    public function index($id){
        $product = Product::findOrFail($id);
        $product->name = json_decode($product->name);
        $product->short_des = json_decode($product->short_des);
        return view('frontend/productDetail',['products'=>$product]);
    }
}
