<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\UploadFile;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    private $template;

    public function __construct()
    {
        $this->template = "admin.pages.category.";
    }

    public function index()
    {
        return view($this->template . 'index');
    }

    public function dataList()
    {
        $data = Category::select('id', 'title', 'icon', 'status')->orderBy('ordering', 'asc')->get();
        $data->each(function ($query) {
            $query->iconPath = url('uploads/category-icon', $query->icon);
        });
        return response()->json(['data' => $data, 'total' => count($data)]);
    }

    public function form($id = null)
    {
        $brand = Brand::where('status', 1)->orderBy('ordering')->get();
        $brand->each(function($query) {
            $query->title = json_decode($query->title);
        });
        
        if ($id) {
            $model = Category::findOrFail($id);
            $model->title = json_decode($model->title);
            $model['brands'] = $brand;
            return view($this->template . 'update', $model);
        } else {
            $model['brands'] = $brand;
            return view($this->template . 'create', $model);
        }
    }

    public function onCreate(Request $req)
    {
        $title = json_encode(['en' => $req->title['en'] ?: '', 'kh' =>  $req->title['kh'] ?: '']);

        $result = $this->_onSave(null, [
            'title' => $title,
            'brand_id' => request('brand_id', null),
            'ordering' => request('ordering', 0),
            'status' => $req->status,
            'icon' => $req->image,

        ]);

        if (!$result) {
            $req->session()->flash('error', 'Server Error!');
            return back();
        }

        $req->session()->flash('success', 'Save item success');
        return redirect()->route('category.index');
    }

    public function onUpdate(Request $req, $id)
    {
        $title = json_encode(['en' => $req->title['en'] ?: '', 'kh' =>  $req->title['kh'] ?: '']);

        $result = $this->_onSave($id, [
            'title' => $title,
            'brand_id' => request('brand_id', null),
            'ordering' => request('ordering', 0),
            'status' => $req->status,
            'icon' => $req->image,
        ]);

        if (!$result) {
            $req->session()->flash('error', 'Server Error!');
            return back();
        }

        $req->session()->flash('success', 'Save item success');
        return redirect()->route('category.index');
    }

    public function onDelete($id)
    {
        $model = Category::findOrFail($id);
        $model->delete();
        return response()->json(['success' => true]);
    }

    public function dropdown(Request $req){
        $data = Category::where(
            [ ['status', 1], ['brand_id', request('brandId')] ])
            ->select('id', 'title')
            ->orderBy('ordering', 'asc')
            ->get();

        $data->each(function($query){
            $title = json_decode($query->title);
            $query->label = $title ? $title->en : '';
            $query->value = $query->id;
        });

        return response()->json($data);
    }

    private function _onSave($id, $data)
    {
        try {
            if ($id) {
                Category::where('id', $id)->update($data);
            } else {
                Category::create($data);
            }
        } catch (Exception $error) {
            Log::info($error);
            return false;
        }
        return true;
    }
}
