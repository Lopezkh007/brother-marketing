<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Banner;

class HomeController extends Controller
{
    public function index(){
        $quick['quicks'] = "";
        $data['slider'] = Slider::where('status',1)->orderby('ordering')->get();
        $data['slider']->each(function($query) {
            $query->title = json_decode($query->title);
            $query->subtitle = json_decode($query->subtitle);
            $query->des = json_decode($query->des);
            $query->label = json_decode($query->label);
        });
        $data['category'] = Category::where('status',1)->orderby('ordering')->get();
        $data['category']->each(function($query){
            $query->title = json_decode($query->title);
        });
        $data['brands'] = Brand::where('status',1)->orderBy('ordering','asc')->get();
        $data['brands']->each(function($query){
            $query->title = json_decode($query->title);
            if($query->ordering == 1){
                $products = Product::where([['status',1], ['is_feature',1]])
                                ->orderBy('ordering', 'asc')->limit(8)->get();
                $products->each(function($query){
                    $query->name = json_decode($query->name);
                    $query->short_des = json_decode($query->short_des);
                });
            }else{
                $products = Product::where([['status',1], ['is_feature',1], ['brand_id', $query->id]])
                                ->orderBy('ordering', 'asc')->limit(8)->get();
                $products->each(function($query){
                    $query->name = json_decode($query->name);
                    $query->short_des = json_decode($query->short_des);
                });
            }
            
            $query->products = $products;
        });
        $productH = Product::where('is_hot',1)->orderBy('ordering','asc')->first();
        $productH->name = json_decode($productH->name);
        $productH->short_des = json_decode($productH->short_des);
        $data['productHot'] = $productH;
        $data['banner'] = Banner::where([['status',1],['page','HOME']])->first();
        $data['news'] = Blog::where('status',1)->orderby('ordering')->get();
        $data['news']->each(function($query){
            $query->title = json_decode($query->title);
            $query->summary = json_decode($query->summary);
        });
        
        return view('frontend/home',$data);
    }
}
