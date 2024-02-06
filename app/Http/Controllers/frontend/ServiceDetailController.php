<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Service;
use App\Models\SiteSetting;

class ServiceDetailController extends Controller
{
    public function index($id){
        $service = Service::findOrFail($id);
        $service->title = json_decode($service->title);
        $service->summary =json_decode($service->summary);
        $service->description = json_decode($service->description);
        $contact = SiteSetting::where('type','contact')->first();
        $content = json_decode($contact->content);
        $banner = Banner::where([['status',1],['page','SERVICE']])->orderBy('ordering','asc')->first();
        return view('frontend/serviceDetail',['banners'=>$banner,'services'=>$service
        ,'contact'=>$content
        ]);
    }
}
