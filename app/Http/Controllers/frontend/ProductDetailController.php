<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SiteSetting;
use App\Models\Brand;
use App\Models\Banner;

class ProductDetailController extends Controller
{
    public function index($id){
        $product = Product::findOrFail($id);
        $product->name = json_decode($product->name);
        $product->short_des = json_decode($product->short_des);
        $product->galleries = json_decode($product->galleries);
        $capacity = explode(',',$product->capacity);
        $type = explode(',',$product->type);
        $contact = SiteSetting::where('type','contact')->first();
        $content = json_decode($contact->content);
        $brand = Brand::where('id',$product->brand_id)->first();
        $brand->title = json_decode($brand->title);

        $productNew = Product::where([['is_new',1],['status',1]])->get();
        $productNew->each(function($q){
            $q->name = json_decode($q->name);
            $q->short_des = json_decode($q->short_des);
            $q->galleries = json_decode($q->galleries);
        });
        $banner = Banner::where([['status',1],['page','PRODUCTS']])->orderBy('ordering','asc')->first();

        return view('frontend/productDetail',['products'=>$product,
        'capacitys'=>$capacity,'types'=>$type,'contact'=>$content,'brands'=>$brand,'productNews'=>$productNew
        ,'banners'=>$banner
        ]);
    }
}
