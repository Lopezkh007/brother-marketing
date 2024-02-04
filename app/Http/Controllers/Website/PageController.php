<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Career;
use App\Models\Category;
use App\Models\Client;
use App\Models\Product;
use App\Models\Provider;
use App\Models\SiteSetting;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        $data['categories'] = Category::where('status', 1)->withCount('subcategories')->orderBy('ordering', 'asc')->get();
        $data['categories']->each(function ($query) {
            $query->title = json_decode($query->title);
        });

        $data['providers'] = Provider::where('status', 1)->orderBy('ordering', 'asc')->get();
        $data['providers']->each(function ($query) {
            $query->title = json_decode($query->title);
            $query->des = json_decode($query->des);
        });

        $aboutUs = SiteSetting::where('type', 'about')->first();
        $data['aboutUs'] = json_decode($aboutUs->content);
        $data["banner"] = Banner::where('status', 1)->where('page', 'HOME')->where('position', 'BOTTOM')->first();
        return view('website.pages.about', $data);
    }

    public function contact()
    {
        $data['categories'] = Category::where('status', 1)->withCount('subcategories')->orderBy('ordering', 'asc')->get();
        $data['categories']->each(function ($query) {
            $query->title = json_decode($query->title);
        });

        $contactUs = SiteSetting::where('type', 'contact')->first();
        $data['contactUs'] = json_decode($contactUs->content);
        $data["banner"] = Banner::where('status', 1)->where('page', 'HOME')->where('position', 'BOTTOM')->first();
        return view('website.pages.contact', $data);
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required',
            'subject' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.mailjet.com/v3.1/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{"Messages":[{"From":{"Email": "phanith1826@gmail.com","Name":"www.camgotech.com"},"To":[{"Email": "info@sakkincambodia.com","Name": "You"}],"Subject":"' . $request->subject . '","TextPart": "' . $request->message . '","HTMLPart":"<h3>Full name: ' . $request->name . '</h3><h3>Email: ' . $request->email . '</h3><h3>Phone Number: ' . $request->phoneNumber . '</h3><h3>Subject: ' . $request->subject . '</h3><p>' . $request->message . '</p>"}]}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Basic OTgxYzQwNGUzMDViNDg0YjlhOWMzNTEyNjBjYTRhYjI6ZjEwM2FkODVlYTcxNzgwNGI0N2U3OWUwMTMxZTAwZTQ='
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return redirect()->back()->with('message', 'Sending message successfully.');
    }


    public function term()
    {
        $data['categories'] = Category::where('status', 1)->withCount('subcategories')->orderBy('ordering', 'asc')->get();
        $data['categories']->each(function ($query) {
            $query->title = json_decode($query->title);
        });
        $term = SiteSetting::where('type', 'term')->first();
        $data['term'] = json_decode($term->content);
        $data["newProducts"] = Product::where('status', 1)->where('is_new', 1)->orderBy('ordering', 'asc')->limit(3)->get();
        $data["newProducts"]->each(function ($query) {
            $query->name = json_decode($query->name);
        });
        $data["banner"] = Banner::where('status', 1)->where('page', 'HOME')->where('position', 'BOTTOM')->first();
        return view('website.pages.term', $data);
    }

    public function privacyPolicy()
    {
        $data['categories'] = Category::where('status', 1)->withCount('subcategories')->orderBy('ordering', 'asc')->get();
        $data['categories']->each(function ($query) {
            $query->title = json_decode($query->title);
        });
        $policy = SiteSetting::where('type', 'policy')->first();
        $data['policy'] = json_decode($policy->content);
        $data["newProducts"] = Product::where('status', 1)->where('is_new', 1)->orderBy('ordering', 'asc')->limit(3)->get();
        $data["newProducts"]->each(function ($query) {
            $query->name = json_decode($query->name);
        });
        $data["banner"] = Banner::where('status', 1)->where('page', 'HOME')->where('position', 'BOTTOM')->first();
        return view('website.pages.privacy-policy', $data);
    }
    public function client()
    {
        $data['categories'] = Category::where('status', 1)->withCount('subcategories')->orderBy('ordering', 'asc')->get();
        $data['categories']->each(function ($query) {
            $query->title = json_decode($query->title);
        });

        $data['clients'] = Client::where('status', 1)->orderBy('ordering', 'asc')->get();
        $data['clients']->each(function ($query) {
            $query->title = json_decode($query->title);
            $query->des = json_decode($query->des);
        });

        $data["banner"] = Banner::where('status', 1)->where('page', 'HOME')->where('position', 'BOTTOM')->first();
        return view('website.pages.client', $data);
    }
    public function career()
    {
        $data['categories'] = Category::where('status', 1)->withCount('subcategories')->orderBy('ordering', 'asc')->get();
        $data['categories']->each(function ($query) {
            $query->title = json_decode($query->title);
        });

        $data['careers'] = Career::where('status', 1)->orderBy('ordering', 'asc')->get();
        $data['careers']->each(function ($query) {
            $query->title = json_decode($query->title);
            $query->closed_at = Carbon::parse($query->closed_at)->format('d/M/Y');
        });

        $data["banner"] = Banner::where('status', 1)->where('page', 'HOME')->where('position', 'BOTTOM')->first();
        return view('website.pages.career', $data);
    }
    public function careerDetail($id)
    {
        $data['categories'] = Category::where('status', 1)->withCount('subcategories')->orderBy('ordering', 'asc')->get();
        $data['categories']->each(function ($query) {
            $query->title = json_decode($query->title);
        });

        $data['career'] = Career::find($id);
        $data['career']->title = json_decode($data['career']->title);
        $data['career']->description = json_decode($data['career']->description);
        $data['career']->closed_at = Carbon::parse($data['career']->closed_at)->format('d/M/Y');

        $data["banner"] = Banner::where('status', 1)->where('page', 'HOME')->where('position', 'BOTTOM')->first();
        return view('website.pages.career-detail', $data);
    }
}
