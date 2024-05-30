<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AspirasiModel;

class UserControllers extends Controller
{
    public function homeUser() {

        $user = AspirasiModel::all();
        // dd($user);

        return view('user.home', compact('user'));
    }

    public function aboutUser() {

        return view('user.about');
    }

    public function statusUser() {
        
        $userstatus = AspirasiModel::all();
        return view('user.status', compact('userstatus'));
    }

    public function aspirasi() {
        return view('user.aspirasi');
    }

    public function simpanData(Request $request) {
        // dd($request);
        try {
            \DB::beginTransaction();
            AspirasiModel::create([
                'nama_lengkap' => $request->nama_lengkap,
                'npm' => $request->npm,
                'kelas' => $request->kelas,
                'no_telp' => $request->tlpn,
                'aspirasi' => $request->aspirasi,
                'image' => $request->gambar
            ]);
        } catch (\Throwable $th) {
            dd($th);
            return redirect('/user/status');
        }

        \DB::commit();
        return redirect('/user/status');
    }
}
