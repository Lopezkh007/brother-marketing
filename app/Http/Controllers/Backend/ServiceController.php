<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ServiceController extends Controller
{
    private $template;

    public function __construct()
    {
        $this->template = "admin.pages.service.";
    }

    public function index()
    {
        return view($this->template . 'index');
    }

    public function dataList()
    {
        $data = Service::select('id', 'title', 'status', 'is_main_event', 'thumbnail','ordering')->orderBy('id', 'desc')->get();
        $data->each(function ($query) {
            $query->imageUrl = url('uploads/service', $query->thumbnail);
        });
        return response()->json(['data' => $data, 'total' => count($data)]);
    }

    public function form($id = null)
    {
        if ($id) {
            $model = Service::findOrFail($id);
            $model->title = json_decode($model->title);
            $model->summary = json_decode($model->summary);
            $model->description = json_decode($model->description);
            return view($this->template . 'update', $model);
        } else {
            return view($this->template . 'create');
        }
    }

    public function onCreate(Request $req)
    {
        $result = $this->_onSave(null, [
            "title" => json_encode($req->title),
            "summary" => json_encode($req->summary),
            "description" => json_encode($req->description),
            "thumbnail" => $req->image,
            "ordering" => request('ordering', 0),
            "status" => request('status', 0),
        ]);

        if (!$result) {
            $req->session()->flash('error', 'Server Error!');
            return back();
        }

        $req->session()->flash('success', 'Save item success');
        return redirect()->route('service.index');
    }

    public function onUpdate(Request $req, $id)
    {
        $result = $this->_onSave($id, [
            "title" => json_encode($req->title),
            "summary" => json_encode($req->summary),
            "description" => json_encode($req->description),
            "thumbnail" => $req->image,
            "ordering" => request('ordering', 0),
            "status" => request('status', 0),
        ]);

        if (!$result) {
            $req->session()->flash('error', 'Server Error!');
            return back();
        }

        $req->session()->flash('success', 'Save item success');
        return view($this->template . 'index');
    }

    public function onDelete($id)
    {
        $model = Service::findOrFail($id);
        $model->delete();
        return response()->json(['success' => true]);
    }

    private function _onSave($id, $data)
    {
        try {
            if ($id) {
                Service::where('id', $id)->update($data);
            } else {
                Service::create($data);
            }
        } catch (Exception $error) {
            Log::info('Error: ' . $error->getMessage());
            return false;
        }
        return true;
    }
}
