<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControllers extends Controller
{
    public function loginForm()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if ($credentials['username'] === 'admin' && $credentials['password'] === 'admin') {
            // Autentikasi berhasil
            return redirect()->route('admin.dashboard');
        }

        // Autentikasi gagal
        return redirect()->route('admin.login')->with('error', 'Anda bukan admin');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function about()
    {
        return view('admin.about');
    }
}
