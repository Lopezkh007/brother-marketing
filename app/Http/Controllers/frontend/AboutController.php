<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSetting;
use App\Models\Partner;
use App\Models\Banner;

class AboutController extends Controller
{
    public function index(){
        $abouts = SiteSetting::where('type','about')->first();
        $about_us = json_decode($abouts->content);
        $partner = Partner::where('status',1)->orderBy('ordering','asc')->get();
        $banner = Banner::where([['status',1],['page','ABOUT'],['position','HEADER']])->first();
        return view('frontend/about', ['abouts' => $about_us,'partners' => $partner,'banners'=>$banner]);
    }
}
