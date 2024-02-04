<?php

namespace App\Http\Controllers\Authenticate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('admin.auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $credentials['status'] = "ACTIVE";
        $credentials['role'] = 'ADMIN';

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $request->session()->flash('success', 'Welcome to admin dashboard!');
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'Email & password are not match.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('camgo_login');
    }
}
