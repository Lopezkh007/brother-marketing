<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BlogController extends Controller
{
    private $template;

    public function __construct()
    {
        $this->template = "admin.pages.blog.";
    }

    public function index()
    {
        return view($this->template . 'index');
    }

    public function dataList()
    {
        $data = Blog::select('id', 'title', 'status', 'is_main_event', 'thumbnail','ordering')->orderBy('id', 'desc')->get();
        $data->each(function ($query) {
            $query->imageUrl = url('uploads/blogs', $query->thumbnail);
        });
        return response()->json(['data' => $data, 'total' => count($data)]);
    }

    public function form($id = null)
    {
        if ($id) {
            $model = Blog::findOrFail($id);
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
        return redirect()->route('blogs.index');
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
        $model = Blog::findOrFail($id);
        $model->delete();
        return response()->json(['success' => true]);
    }

    private function _onSave($id, $data)
    {
        try {
            if ($id) {
                Blog::where('id', $id)->update($data);
            } else {
                Blog::create($data);
            }
        } catch (Exception $error) {
            Log::info('Error: ' . $error->getMessage());
            return false;
        }
        return true;
    }
}
