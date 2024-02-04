<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Client;
use App\Models\Product;
use App\Models\SiteSetting;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::where('status', 1)->withCount('subcategories')->orderBy('ordering', 'asc')->get();
        $data['categories']->each(function ($query) {
            $query->title = json_decode($query->title);
        });
        $data["products"] = Product::where('status', 1)->where('is_deal', 1)->orderBy('ordering', 'asc')->limit(4)->get();
        $data["products"]->each(function ($query) {
            $query->name = json_decode($query->name);
        });
        $data["mainSliders"] = Slider::where('status', 1)->where('slide_type', 'MAIN')->orderBy('ordering', 'asc')->get();
        $data["rightSliders"] = Slider::where('status', 1)->where('slide_type', 'RIGHT')->orderBy('ordering', 'asc')->get();
        $data["smallSliders"] = Slider::where('status', 1)->where('slide_type', 'SMALL')->orderBy('ordering', 'asc')->get();
        $data["banner"] = Banner::where('status', 1)->where('page', 'HOME')->where('position', 'BOTTOM')->first();
        $data["blogs"] = Blog::where('status', 1)->orderBy('ordering', 'asc')->limit(4)->get();
        $data["blogs"]->each(function ($query) {
            $query->title = json_decode($query->title);
        });
        $home = SiteSetting::where('type', 'home')->first();
        $data['home'] = json_decode($home->content);

        $data['clients'] = Client::where('status', 1)->orderBy('ordering', 'asc')->get();
        $data['clients']->each(function ($query) {
            $query->title = json_decode($query->title);
            $query->des = json_decode($query->des);
        });

        return view("website.pages.home", $data);
    }
}
