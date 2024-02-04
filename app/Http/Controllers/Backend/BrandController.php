<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\UploadFile;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BrandController extends Controller
{
    private $template;

    public function __construct()
    {
        $this->template = "admin.pages.brand.";
    }

    public function index()
    {
        return view($this->template . 'index');
    }

    public function dataList()
    {
        $data = Brand::select('id', 'title', 'status')->orderBy('ordering', 'asc')->get();
        return response()->json(['data' => $data, 'total' => count($data)]);
    }

    public function form($id = null)
    {
        if ($id) {
            $model = Brand::findOrFail($id);
            $model->title = json_decode($model->title);
            return view($this->template . 'update', $model);
        } else {
            return view($this->template . 'create');
        }
    }

    public function onCreate(Request $req)
    {
        $title = json_encode(['en' => $req->title['en'] ?: '', 'kh' =>  $req->title['kh'] ?: '']);

        $result = $this->_onSave(null, [
            'title' => $title,
            'ordering' => request('ordering', 0),
            'status' => $req->status

        ]);

        if (!$result) {
            $req->session()->flash('error', 'Server Error!');
            return back();
        }

        $req->session()->flash('success', 'Save item success');
        return redirect()->route('brand.index');
    }

    public function onUpdate(Request $req, $id)
    {
        $title = json_encode(['en' => $req->title['en'] ?: '', 'kh' =>  $req->title['kh'] ?: '']);

        $result = $this->_onSave($id, [
            'title' => $title,
            'ordering' => request('ordering', 0),
            'status' => $req->status
        ]);

        if (!$result) {
            $req->session()->flash('error', 'Server Error!');
            return back();
        }

        $req->session()->flash('success', 'Save item success');
        return redirect()->route('brand.index');
    }

    public function onDelete($id)
    {
        $model = Brand::findOrFail($id);
        $model->delete();
        return response()->json(['success' => true]);
    }

    private function _onSave($id, $data)
    {
        try {
            if ($id) {
                Brand::where('id', $id)->update($data);
            } else {
                Brand::create($data);
            }
        } catch (Exception $error) {
            Log::info($error);
            return false;
        }
        return true;
    }
}
