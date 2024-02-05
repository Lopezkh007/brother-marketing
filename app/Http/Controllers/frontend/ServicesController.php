<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Banner;

class ServicesController extends Controller
{
    public function index(){
        $service = Service::where('status',1)->orderBy('ordering','asc')->paginate(6);
        $service->each(function($q){
            $q->title = json_decode($q->title);
            $q->summary = json_decode($q->summary);
        });
        $banners = Banner::where([['status',1],['page','SERVICES']])->orderBy('ordering','asc')->first();
        
        return view('frontend/services',['services'=>$service,'banner'=>$banners]);
    }
}
