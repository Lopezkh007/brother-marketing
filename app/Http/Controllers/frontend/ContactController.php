<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSetting;
use App\Models\Partner;
use App\Models\Banner;

class ContactController extends Controller
{
    public function index(){
        $contact = SiteSetting::where('type','contact')->first();
        $content = json_decode($contact->content);
        $partners = Partner::where('status', 1)->orderBy('ordering', 'asc')->get();
        $banner = Banner::where([['status',1],['page','CONTACT']])->orderBy('ordering','asc')->first();
        return view('frontend/contact', ['contact' => $content, 'partners' => $partners,'banners'=>$banner]);
    }
}
