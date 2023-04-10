<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Login Page

    public function login()
    {
        return view('admin.login');
    }

    // Login Validation

    public function auth(Request $request)
    {
        $input = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($input)) {
            $userRole = auth()->user()->roles->first()->name;
            return redirect()->intended(route("$userRole.dashboard"));
        } else {
            Session()->flash('error', 'Please Enter Valid Login Details');
            return redirect('/');
        }
    }

    // View Dashboard

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // Log Out

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
