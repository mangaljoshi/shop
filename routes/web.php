<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\CategoryController;

use App\Models\User;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/login',[AdminLoginController:: class,'index'])->name('admin.login');
// Route::post('/admin/authenticate',[AdminLoginController:: class,'authenticate'])->name('admin.authenticate');
Route::post('/admin/dashboard',[AdminHomeController:: class,'index'])->name('admin.dashboard');
Route::get('admin/logout', [AdminHomeController::class, 'logout'])->name('admin.logout');

// Category Routes
Route::get('admin/categories/create', [CategoryController::class, 'create'])->name('categories.create');
