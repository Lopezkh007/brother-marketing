<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;

class ProductOneController extends Controller
{
    public function index(){
        $data['category'] = Category::where('status',1)->orderby('ordering')->get();
        $data['category']->each(function($q){
            $q->title = json_decode($q->title);
        });
        $data['brands'] = Brand::where('status',1)->orderby('ordering')->get();
        $data['brands']->each(function($q){
            $q->title = json_decode($q->title);
        });
        $data['product'] = Product::where('status',1)->orderby('ordering')->paginate(config('app.row'));
        $data['product']->each(function($q){
            $q->name = json_decode($q->name);
            $q->short_des = json_decode($q->short_des);
        });
        return view('frontend/product',$data);
    }
}
