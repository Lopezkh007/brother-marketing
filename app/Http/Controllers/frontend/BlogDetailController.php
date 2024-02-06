<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\SiteSetting;

class BlogDetailController extends Controller
{
    public function index($id){
        $news = Blog::findOrFail($id);
        $news->title = json_decode($news->title);
        $news->summary =json_decode($news->summary);
        $news->description = json_decode($news->description);
        $category = Category::where('status',1)->orderBy('ordering','asc')->get();
        $category->each(function($q){
            $q->title = json_decode($q->title);
        });
        $contact = SiteSetting::where('type','contact')->first();
        $content = json_decode($contact->content);
        $banner = Banner::where([['status',1],['page','BLOG']])->orderBy('ordering','asc')->first();
        return view('frontend/blogDetail',['banners'=>$banner,'new'=>$news,'categories'=>$category
        ,'contact'=>$content
        ]);
    }
}
