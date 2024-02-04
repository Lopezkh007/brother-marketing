<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function events()
    {
        $data['categories'] = Category::where('status', 1)->withCount('subcategories')->orderBy('ordering', 'asc')->get();
        $data['categories']->each(function ($query) {
            $query->title = json_decode($query->title);
        });
        $data['blogs'] = Blog::where('status', 1)->orderBy('id', 'desc')->paginate(12);
        $data['blogs']->each(function ($query) {
            $query->title = json_decode($query->title);
        });

        $data["banner"] = Banner::where('status', 1)->where('page', 'HOME')->where('position', 'BOTTOM')->first();
        return view('website.pages.events', $data);
    }
    public function event($id)
    {
        $data['categories'] = Category::where('status', 1)->withCount('subcategories')->withCount('products')->orderBy('ordering', 'asc')->get();
        $data['categories']->each(function ($query) {
            $query->title = json_decode($query->title);
        });

        $data["newProducts"] = Product::where('status', 1)->where('is_new', 1)->orderBy('ordering', 'asc')->limit(3)->get();
        $data["newProducts"]->each(function ($query) {
            $query->name = json_decode($query->name);
        });

        $data['blog'] = Blog::find($id);
        $data['blog']->title = json_decode($data['blog']->title);
        $data['blog']->description = json_decode($data['blog']->description);

        $data["banner"] = Banner::where('status', 1)->where('page', 'HOME')->where('position', 'BOTTOM')->first();

        return view('website.pages.event', $data);
    }
}
