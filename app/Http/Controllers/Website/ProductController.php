<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Client;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $req)
    {
        $data['categories'] = Category::where('status', 1)->withCount('subcategories')->withCount('products')->orderBy('ordering', 'asc')->get();
        $data['categories']->each(function ($query) {
            $query->title = json_decode($query->title);
            $query->partner_title = json_decode($query->partner_title);
        });

        $data['category'] = Category::find($req->category);
        if ($data['category'] != null) {
            $data['category']->title = json_decode($data['category']->title);
            $data['category']->description = json_decode($data['category']->description);
            $data['category']->partner_title = json_decode($data['category']->partner_title);
        }
        $data['subcategory'] = Subcategory::find($req->subcategory);
        if ($data['subcategory'] != null) {
            $data['subcategory']->title = json_decode($data['subcategory']->title);
        }

        $data["products"] = Product::where('status', 1)
            ->when($req->searchProduct, function ($query) use ($req) {
                $query->where('name', 'LIKE', '%' . $req->searchProduct . '%');
            })
            ->when($req->category != null, function ($query) use ($req) {
                $query->where('category_id', $req->category);
            })
            ->when($req->subcategory != null, function ($query) use ($req) {
                $query->where('subcategory_id', $req->subcategory);
            })->when($req->product_type != null, function ($query) use ($req) {
                $query->where('is_deal', 1);
            })->orderBy('ordering', 'asc')->get();
        $data["products"]->each(function ($query) {
            $query->name = json_decode($query->name);
        });

        $data["newProducts"] = Product::where('status', 1)->where('is_new', 1)->orderBy('ordering', 'asc')->limit(3)->get();
        $data["newProducts"]->each(function ($query) {
            $query->name = json_decode($query->name);
        });

        $data["bannerTop"] = Banner::where('status', 1)->where('page', 'PRODUCTS')->where('position', 'TOP')->first();
        $data["bannerBottom"] = Banner::where('status', 1)->where('page', 'PRODUCTS')->where('position', 'BOTTOM')->first();
        $data["bannerLeft"] = Banner::where('status', 1)->where('page', 'PRODUCTS')->where('position', 'LEFT')->first();
        
        $data["clients"] = Client::where('status', 1)->when($req->category != null, function($query) use ($req) {
            $query->whereJsonContains('category_id', $req->category);
        })->orderBy('ordering', 'asc')->get();

        return view('website.pages.product-list', $data);
    }

    public function detail($id)
    {
        $data['categories'] = Category::where('status', 1)->withCount('subcategories')->withCount('products')->orderBy('ordering', 'asc')->get();
        $data['categories']->each(function ($query) {
            $query->title = json_decode($query->title);
        });

        $data['product'] = Product::with('category')->findOrFail($id);
        $data['product']->name = json_decode($data['product']->name);
        $data['product']->short_des = json_decode($data['product']->short_des);
        $data['product']->des = json_decode($data['product']->des);
        $data['product']->additional_info = json_decode($data['product']->additional_info);
        $data['product']->galleries = json_decode($data['product']->galleries);
        $data['product']->size = $data['product']->size != null ? explode(",", $data['product']->size) : [];
        $data['product']->weight = $data['product']->weight != null ? explode(",", $data['product']->weight) : [];
        $data['product']->color = $data['product']->color != null ? explode(",", $data['product']->color) : [];

        $data["relatedProducts"] = Product::where('status', 1)->where('id', '!=', $id)
            ->where('category_id', $data['product']->category_id)
            ->orderBy('ordering', 'asc')->limit(4)->get();
        $data["relatedProducts"]->each(function ($query) {
            $query->name = json_decode($query->name);
        });

        $data["newProducts"] = Product::where('status', 1)->where('is_new', 1)->orderBy('ordering', 'asc')->limit(3)->get();
        $data["newProducts"]->each(function ($query) {
            $query->name = json_decode($query->name);
        });

        $data["bannerBottom"] = Banner::where('status', 1)->where('page', 'PRODUCT')->where('position', 'BOTTOM')->first();
        $data["bannerRight"] = Banner::where('status', 1)->where('page', 'PRODUCT')->where('position', 'RIGHT')->first();
        
        $data["clients"] = Client::where('status', 1)->whereJsonContains('category_id', strval($data['product']->category_id))->orderBy('ordering', 'asc')->get();

        return view('website.pages.product-detail', $data);
    }
}
