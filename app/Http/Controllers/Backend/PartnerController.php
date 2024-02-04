<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
use Exception;
use Illuminate\Support\Facades\Log;

class PartnerController extends Controller
{
    private $template;

    public function __construct()
    {
        $this->template = "admin.pages.partner.";
    }

    public function index()
    {
        return view($this->template . 'index');
    }

    public function dataList()
    {
        $data = Partner::select('id', 'name', 'navigate_to', 'status', 'ordering', 'image')->orderBy('id', 'desc')->get();

        $data->each(function ($query) {
            $query->imageUrl = url('uploads/partners', $query->image);
        });

        return response()->json(['data' => $data, 'total' => count($data)]);
    }

    public function form($id = null)
    {
        if ($id) {
            $model = Partner::findOrFail($id);
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
            'name' => request('name'),
            'navigate_to' => $req->navigateTo,
            'ordering' => request("ordering", 0),
            'status' => request("status", 1),
            'image' => $req->image,
        ]);

        if (!$result) {
            $req->session()->flash('error', 'Server Error!');
            return back();
        }

        $req->session()->flash('success', 'Save item success');
        return redirect()->route('partner.index');
    }

    public function onUpdate(Request $req, $id)
    {
        $req->validate([
            'image' => 'required'
        ]);

        $result = $this->_onSave($id, [
            'name' => request('name'),
            'navigate_to' => $req->navigateTo,
            'ordering' => request("ordering", 0),
            'status' => request("status", 1),
            'image' => $req->image
        ]);

        if (!$result) {
            $req->session()->flash('error', 'Server Error!');
            return back();
        }

        $req->session()->flash('success', 'Save item success');
        return redirect()->route('partner.index');
    }

    public function onDelete($id)
    {
        $model = Partner::findOrFail($id);
        $model->delete();
        return response()->json(['success' => true]);
    }

    private function _onSave($id, $data)
    {
        try {
            if ($id) {
                Partner::where('id', $id)->update($data);
            } else {
                Partner::create($data);
            }
        } catch (Exception $error) {
            Log::info($error);
            return false;
        }
        return true;
    }
}
