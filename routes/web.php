<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControllers;
use App\Http\Controllers\AdminControllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Untuk Tampilan Admin 

Route::get('admin/login', [AdminControllers::class, 'loginForm'])->name('admin.login');
Route::post('login/save', [AdminControllers::class, 'authenticate'])->name('admin.authenticate');
Route::get('admin/dashboard', [AdminControllers::class, 'dashboard'])->name('admin.dashboard');
Route::get('admin/about', [AdminControllers::class, 'about'])->name('admin.about');
Route::get('admin/status' , [AdminControllers::class, 'status'])->name('admin.status');

// Untuk Tampilan User

Route::get('user/home', [UserControllers::class, 'homeUser'])->name('user.home');
Route::get('user/about', [UserControllers::class, 'aboutUser'])->name('user.about');
Route::get('user/status', [UserControllers::class, 'statusUser'])->name('user.status');
Route::get('user/aspirasi', [UserControllers::class, 'aspirasi'])->name('user.aspirasi');
Route::post('user/aspirasi/save', [UserControllers::class, 'simpanData'])->name('aspirasiSave');
