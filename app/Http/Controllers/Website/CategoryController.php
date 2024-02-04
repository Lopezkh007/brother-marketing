<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($categoryId)
    {
        $data['categories'] = Category::where('status', 1)->withCount('subcategories')->orderBy('ordering', 'asc')->get();
        $data['categories']->each(function($query){
            $query->title = json_decode($query->title);
        });

        $data['category'] = Category::findOrFail($categoryId);
        $data['category']->title = json_decode($data['category']->title);

        $data['subcategories'] = Subcategory::where('status', 1)->where('category_id', $categoryId)->withCount('products')->orderBy('ordering', 'asc')->get();
        $data['subcategories']->each(function($query){
            $query->title = json_decode($query->title);
            $query->des = json_decode($query->des);
        });

        $data["banner"] = Banner::where('status', 1)->where('page', 'SUBCATEGORY')->where('position', 'BOTTOM')->first();

        return view("website.pages.sub-category", $data);
    }
}
