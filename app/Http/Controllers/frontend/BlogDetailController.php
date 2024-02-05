<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BlogDetailController extends Controller
{
    public function index(){
        $banner = Banner::where([['status',1],['page','BLOG']])->orderBy('ordering','asc')->first();
        return view('frontend/blogDetail',['banners'=>$banner]);
    }
}
