<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Banner;

class NewsController extends Controller
{
    public function index(){
        $news = Blog::where('status',1)->orderBy('ordering','asc')->paginate(6);
        $news->each(function($q){
            $q->title = json_decode($q->title);
            $q->summary = json_decode($q->summary);
        });
        $banner = Banner::where([['status',1],['page','BLOGS']])->orderBy('ordering','asc')->first();
        return view('frontend/news',['new'=>$news,'banners'=>$banner]);
    }
}
