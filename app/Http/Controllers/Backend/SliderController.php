<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Exception;
use Illuminate\Support\Facades\Log;

class SliderController extends Controller
{
    private $template;

    public function __construct()
    {
        $this->template = "admin.pages.slider.";
    }

    public function index()
    {
        return view($this->template . 'index');
    }

    public function dataList()
    {
        $data = Slider::select('id', 'navigate_to', 'status', 'ordering', 'image')->orderBy('id', 'desc')->get();

        $data->each(function ($query) {
            $query->imageUrl = url('uploads/sliders', $query->image);
        });

        return response()->json(['data' => $data, 'total' => count($data)]);
    }

    public function form($id = null)
    {
        if ($id) {
            $model = Slider::findOrFail($id);
            $model->title = json_decode($model->title);
            $model->subtitle = json_decode($model->subtitle);
            $model->des = json_decode($model->des);
            $model->label = json_decode($model->label);
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

        $title = json_encode(['en' => $req->title['en'] ?: '', 'kh' =>  $req->title['kh'] ?: '']);
        $subtitle = json_encode(['en' => $req->subtitle['en'] ?: '', 'kh' =>  $req->subtitle['kh'] ?: '']);
        $des = json_encode(['en' => $req->des['en'] ?: '', 'kh' =>  $req->des['kh'] ?: '']);
        $label = json_encode(['en' => $req->label['en'] ?: '', 'kh' =>  $req->label['kh'] ?: '']);

        $result = $this->_onSave(null, [
            'title' => $title,
            'subtitle' => $subtitle,
            'des' => $des,
            'label' => $label,
            'navigate_to' => $req->navigateTo,
            'redirect_new_tap' => request("redirect_new_tap", 0),
            'ordering' => request("ordering", 0),
            'status' => request("status", 1),
            'image' => $req->image
        ]);

        if (!$result) {
            $req->session()->flash('error', 'Server Error!');
            return back();
        }

        $req->session()->flash('success', 'Save item success');
        return redirect()->route('slider.index');
    }

    public function onUpdate(Request $req, $id)
    {
        $req->validate([
            'image' => 'required'
        ]);

        $title = json_encode(['en' => $req->title['en'] ?: '', 'kh' =>  $req->title['kh'] ?: '']);
        $subtitle = json_encode(['en' => $req->subtitle['en'] ?: '', 'kh' =>  $req->subtitle['kh'] ?: '']);
        $des = json_encode(['en' => $req->des['en'] ?: '', 'kh' =>  $req->des['kh'] ?: '']);
        $label = json_encode(['en' => $req->label['en'] ?: '', 'kh' =>  $req->label['kh'] ?: '']);

        $result = $this->_onSave($id, [
            'title' => $title,
            'subtitle' => $subtitle,
            'des' => $des,
            'label' => $label,
            'navigate_to' => $req->navigateTo,
            'redirect_new_tap' => request("redirect_new_tap", 0),
            'ordering' => request("ordering", 0),
            'status' => request("status", 1),
            'image' => $req->image
        ]);

        if (!$result) {
            $req->session()->flash('error', 'Server Error!');
            return back();
        }

        $req->session()->flash('success', 'Save item success');
        return redirect()->route('slider.index');
    }

    public function onDelete($id)
    {
        $model = Slider::findOrFail($id);
        $model->delete();
        return response()->json(['success' => true]);
    }

    private function _onSave($id, $data)
    {
        try {
            if ($id) {
                Slider::where('id', $id)->update($data);
            } else {
                Slider::create($data);
            }
        } catch (Exception $error) {
            Log::info($error);
            return false;
        }
        return true;
    }
}
