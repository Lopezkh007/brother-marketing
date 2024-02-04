<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSetting;
use App\Models\Partner;

class ContactController extends Controller
{
    public function index(){
        $contact = SiteSetting::where('type','contact')->first();
        $content = json_decode($contact->content);
        $partners = Partner::where('status', 1)->orderBy('ordering', 'asc')->get();
        return view('frontend/contact', ['contact' => $content, 'partners' => $partners]);
    }
}
