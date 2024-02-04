<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BannerController extends Controller
{
    private $template;

    public function __construct()
    {
        $this->template = "admin.pages.banner.";
    }

    public function index()
    {
        return view($this->template . 'index');
    }

    public function dataList()
    {
        $data = Banner::select('id', 'page', 'position', 'navigate_to', 'status', 'ordering', 'image')->orderBy('id', 'desc')->get();

        $data->each(function ($query) {
            $query->imageUrl = url('uploads/banners', $query->image);
        });

        return response()->json(['data' => $data, 'total' => count($data)]);
    }

    public function form($id = null)
    {
        if ($id) {
            $model = Banner::findOrFail($id);
            return view($this->template . 'update', $model);
        } else {
            return view($this->template . 'create');
        }
    }

    public function onCreate(Request $req)
    {
        $req->validate([
            'image' => 'required'
        ]);

        $result = $this->_onSave(null, [
            'page' => $req->page,
            'position' => $req->position,
            'navigate_to' => $req->navigateTo,
            'ordering' => request("ordering", 0),
            'status' => $req->status,
            'image' => $req->image
        ]);

        if (!$result) {
            $req->session()->flash('error', 'Server Error!');
            return back();
        }

        $req->session()->flash('success', 'Save item success');
        return redirect()->route('banner.index');
    }

    public function onUpdate(Request $req, $id)
    {
        $req->validate([
            'image' => 'required'
        ]);

        $result = $this->_onSave($id, [
            'page' => $req->page,
            'position' => $req->position,
            'navigate_to' => $req->navigateTo,
            'ordering' => request("ordering", 0),
            'status' => $req->status,
            'image' => $req->image
        ]);

        if (!$result) {
            $req->session()->flash('error', 'Server Error!');
            return back();
        }

        $req->session()->flash('success', 'Save item success');
        return redirect()->route('banner.index');
    }

    public function onDelete($id)
    {
        $model = Banner::findOrFail($id);
        $model->delete();
        return response()->json(['success' => true]);
    }

    private function _onSave($id, $data)
    {
        try {
            if ($id) {
                Banner::where('id', $id)->update($data);
            } else {
                Banner::create($data);
            }
        } catch (Exception $error) {
            Log::info($error);
            return false;
        }
        return true;
    }
}
