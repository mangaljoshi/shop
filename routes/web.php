<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\HomeController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/login',[AdminLoginController:: class,'index'])->name('admin.login');
Route::post('/admin/authenticate',[AdminLoginController:: class,'authenticate'])->name('admin.authenticate');
Route::post('/admin/dashboard',[HomeController:: class,'index'])->name('admin.dashboard');
Route::post('/admin/logout',[HomeController:: class,'logout'])->name('admin.logout');
