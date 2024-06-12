<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AspirasiModel;

class AdminControllers extends Controller
{
    public function loginForm()
    {
        $admin = AspirasiModel::all();

        return view('admin.login', compact('admin'));
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
        $tabel = AspirasiModel::all();
        return view('admin.dashboard', compact('tabel'));
    }

    public function about()
    {
        return view('admin.about');
    }

    public function status() {

        $adminstatus = AspirasiModel::all();

        return view('admin.status', compact('adminstatus'));
    }

    public function logout() {
        return redirect()->route('admin.login');
    }
}
