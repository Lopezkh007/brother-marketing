<?php

namespace App\Http\Controllers\Backend;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    private function getUser()
    {
        return User::find(auth()->user()->id);
    }

    //View
    public function index()
    {
        return view('admin.pages.setting.index', ['model' => $this->getUser()]);
    }

    public function teamView()
    {
        return view('admin.pages.setting.team', ['model' => $this->getUser()]);
    }

    public function getUserList(Request $req)
    {
        $column = 'id';
        $dir = 'desc';
        $data = User::orderBy($column, $dir)->get();

        return response()->json(['data' => $data, 'total' => $data->count()]);
    }

    public function create()
    {
        return view('admin.pages.setting.create');
    }

    public function onSave(Request $req)
    {
        $req->validate([
            'email' => 'email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        $item = [
            'first_name' => $req->first_name,
            'last_name' => $req->last_name,
            'email' => $req->email,
            'phone' => $req->phone_number,
            'role' => $req->role,
            'status' => $req->status,
            'password' => bcrypt($req->password),
        ];

        try {
            User::create($item);
        } catch (Exception $error) {
            $req->session()->flash('error', 'Something wrong!');
            return back();
        }

        $req->session()->flash('success', 'Save item success');
        return redirect()->route('setting.team');
    }

    public function update($id)
    {
        $model = User::findOrFail($id);
        return view('admin.pages.setting.update', ['model' => $model]);
    }

    public function onUpdate($id, Request $req)
    {
        $user = User::findOrFail($id);
        $req->validate([
            'email' => 'email|unique:users,email,' . $id . ',id'
        ]);

        $item = [
            'first_name' => $req->first_name,
            'last_name' => $req->last_name,
            'email' => $req->email,
            'phone' => $req->phone_number,
            'role' => $req->role,
            'status' => $req->status,
        ];

        try {
            $user->update($item);
        } catch (Exception $error) {
            $req->session()->flash('error', 'Something wrong!');
            return back();
        }

        $req->session()->flash('success', 'Save item success');
        return redirect()->route('setting.team');
    }

    public function onUpdateProfile(Request $req)
    {
        $id = auth()->user()->id;
        $user = User::findOrFail($id);
        $req->validate([
            'email' => 'email|unique:users,email,' . $id . ',id'
        ]);

        $item = [
            'first_name' => $req->first_name,
            'last_name' => $req->last_name,
            'email' => $req->email,
            'phone' => $req->phone_number,
        ];

        try {
            $user->update($item);
        } catch (Exception $error) {
            $req->session()->flash('error', 'Something wrong!');
            return $error;
            return back();
        }

        $req->session()->flash('success', 'Save item success');
        return redirect()->route('setting.index');
    }

    public function changePassword($id, Request $req)
    {
        $user = User::findOrFail($id);
        $req->validate([
            'password' => 'required|confirmed|min:6',
        ]);

        try {
            $user->update(['password' => bcrypt($req->password),]);
        } catch (Exception $error) {
            $req->session()->flash('error', 'Something wrong!');
            return back();
        }

        $req->session()->flash('success', 'Save item success');

        if (Auth::check() && auth()->user()->id == $id) {
            return redirect()->route('setting.index');
        } else {
            return redirect()->route('setting.team');
        }
    }

    public function onDelete($id)
    {
        $model = User::findOrFail($id);
        $model->delete();
        return response()->json([]);
    }
}
