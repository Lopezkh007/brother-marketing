<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Certificate;
use App\Models\CertificateCategory;
use App\Models\Product;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index(Request $req)
    {
        $data['categories'] = Category::where('status', 1)->withCount('subcategories')->orderBy('ordering', 'asc')->get();
        $data['categories']->each(function($query){
            $query->title = json_decode($query->title);
        });
        $data['certificateCategory'] = CertificateCategory::find($req->category);
        $data['certificates'] = Certificate::where('status', 1)
            ->when($req->category, function($query) use ($req){
                $query->where('category_id', $req->category);
            })->orderBy('id', 'desc')->get();
        $data['certificates']->each(function($query){
            $query->title = json_decode($query->title);
        });

        $data["banner"] = Banner::where('status', 1)->where('page', 'HOME')->where('position', 'BOTTOM')->first();
        return view('website.pages.certificates', $data);
    }
    public function detail($id)
    {
        $data['categories'] = Category::where('status', 1)->withCount('subcategories')->withCount('products')->orderBy('ordering', 'asc')->get();
        $data['categories']->each(function($query){
            $query->title = json_decode($query->title);
        });

        $data['certificate'] = Certificate::find($id);
        $data['certificate']->title = json_decode($data['certificate']->title);
        $data['certificate']->description = json_decode($data['certificate']->description);
        $data["products"] = Product::where('category_id', $data['certificate']->category_id)->where('status', 1)->orderBy('id', 'desc')->limit(8)->get();
        $data["products"]->each(function($query){
            $query->name = json_decode($query->name);
        });

        return view('website.pages.certificate', $data);
    }
}
