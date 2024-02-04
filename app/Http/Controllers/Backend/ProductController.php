<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\UploadFile;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    private $template;

    public function __construct()
    {
        $this->template = "admin.pages.product.";
    }

    public function index()
    {
        return view($this->template . 'index');
    }

    public function dataList()
    {
        $data = Product::with('category')->orderBy('ordering', 'asc')->get();
        $data->each(function ($query) {
            $query->categoryName = $query->category ? $query->category->title : null;
            $query->brandName = $query->brand ? $query->brand->title : null;
            $query->imagePath = $query->image ? asset('uploads/products/'.$query->image) : null;
        });
        return response()->json(['data' => $data, 'total' => count($data)]);
    }

    public function form($id = null)
    {
        $data["brands"] = Brand::where('status', 1)->orderBy('ordering', 'asc')->get();
        if ($id) {
            $model = Product::findOrFail($id);
            $model->name = json_decode($model->name);
            $model->short_des = json_decode($model->short_des);
            $model->des = json_decode($model->des);
            $model->additional_info = json_decode($model->additional_info);
            $model->galleries = json_decode($model->galleries);
            $data['model'] = $model;
            $categories = Category::where('brand_id', $model->brand_id)->where('status', 1)->orderBy('ordering', 'asc')->get();
            $data['categories'] = $categories;

            return view($this->template . 'update', $data);
        } else {
            return view($this->template . 'create', $data);
        }
    }

    public function onCreate(Request $req)
    {
        $name = json_encode(['en' => $req->name['en'] ?: '', 'kh' =>  $req->name['kh'] ?: '']);
        $shortDes = json_encode(['en' => $req->shortDes['en'] ?: '', 'kh' => $req->shortDes['kh'] ?: '']);
        $des = json_encode(['en' => $req->des['en'] ?: '', 'kh' => $req->des['kh'] ?: '']);
        $additionalInfo = json_encode(['en' => $req->additionalInfo['en'] ?: '', 'kh' => $req->additionalInfo['kh'] ?: '']);

        $image = "";
        $galleries = [];
        $imageBack = "";

        if ($req->hasFile('image')) {
            $image = UploadFile::saveFile('/products', $req->file('image'), null);
        }

        if ($req->hasFile('galleries')) {
            $files = $req->file('galleries');
            foreach ($files as $file) {
                $url = UploadFile::saveFile('/products', $file, null);
                if ($url != null) {
                    array_push($galleries, $url);
                }
            }
        }

        if ($req->hasFile('image_back')) {
            $imageBack = UploadFile::saveFile('/products', $req->file('image_back'), null);
        }

        $result = $this->_onSave(null, [
            'name' => $name,
            'code' => request('code', null),
            'capacity' => request('capacity', null),
            'type' => request('type', null),
            'category_id' => request('category_id', null),
            'brand_id' => request('brand_id', null),
            'short_des' => $shortDes,
            'des' => $des,
            'additional_info' => $additionalInfo,
            'image' => $image,
            'image_back' => $imageBack,
            'galleries' => json_encode($galleries),
            'status' => request('status', 0),
            'is_new' => request('is_new', 0),
            'is_feature' => request('is_feature', 0),
            'is_hot' => request('is_hot', 0),
            "price" => request('price', 0),
            "discount" => request('discount', 0),
            "ordering" => request('ordering', 0),
        ]);

        if (!$result) {
            $req->session()->flash('error', 'Server Error!');
            return back();
        }

        $req->session()->flash('success', 'Save item success');
        return redirect()->route('product.index');
    }

    public function onUpdate(Request $req, $id)
    {
        $name = json_encode(['en' => $req->name['en'] ?: '', 'kh' =>  $req->name['kh'] ?: '']);
        $shortDes = json_encode(['en' => $req->shortDes['en'] ?: '', 'kh' => $req->shortDes['kh'] ?: '']);
        $des = json_encode(['en' => $req->des['en'] ?: '', 'kh' => $req->des['kh'] ?: '']);
        $additionalInfo = json_encode(['en' => $req->additionalInfo['en'] ?: '', 'kh' => $req->additionalInfo['kh'] ?: '']);

        $image = "";
        $galleries = [];
        $image_back = "";

        if ($req->hasFile('image')) {
            $image = UploadFile::saveFile(
                '/products',
                $req->file('image'),
                $req->image_tmp
            );
        } else {
            $image = $req->image_tmp;
        }

        if ($req->hasFile('galleries')) {
            $files = $req->file('galleries');
            foreach ($files as $file) {
                $url = UploadFile::saveFile('/products', $file, null);
                if ($url != null) {
                    array_push($galleries, $url);
                }
            }
            $galleries = json_encode($galleries);
        } else {
            $galleries = $req->galleries_tmp;
        }

        if ($req->hasFile('image_back')) {
            $image_back = UploadFile::saveFile(
                '/products',
                $req->file('image_back'),
                $req->image_back_tmp
            );
        } else {
            $image_back = $req->image_back_tmp;
        }

        $result = $this->_onSave($id, [
            'name' => $name,
            'code' => request('code', null),
            'capacity' => request('capacity', null),
            'type' => request('type', null),
            'category_id' => request('category_id', null),
            'brand_id' => request('brand_id', null),
            'short_des' => $shortDes,
            'des' => $des,
            'additional_info' => $additionalInfo,
            'image' => $image,
            'image_back' => $image_back,
            'galleries' => $galleries,
            'status' => request('status', 0),
            'is_new' => request('is_new', 0),
            'is_feature' => request('is_feature', 0),
            'is_hot' => request('is_hot', 0),
            "price" => request('price', 0),
            "discount" => request('discount', 0),
            "ordering" => request('ordering', 0),
        ]);

        if (!$result) {
            $req->session()->flash('error', 'Server Error!');
            return back();
        }

        $req->session()->flash('success', 'Save item success');
        return redirect()->route('product.index');
    }

    public function onDelete($id)
    {
        $model = Product::findOrFail($id);
        $model->delete();
        return response()->json(['success' => true]);
    }

    private function _onSave($id, $data)
    {
        try {
            if ($id) {
                Product::where('id', $id)->update($data);
            } else {
                Product::create($data);
            }
        } catch (Exception $error) {
            Log::info($error);
            return false;
        }
        return true;
    }
}
