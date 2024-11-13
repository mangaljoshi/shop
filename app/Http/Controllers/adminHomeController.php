<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  // Correct import for the Auth facade


class adminHomeController extends Controller
{
    public function index(){
       $admin = Auth::guard('admin')->user();
        echo 'Welcome'.$admin->name.' <a href="'.route('admin.logout').'">Logout</a>';
    }

    public function logout(){
        Auth::guard('admin')->logout();
                return redirect ()->route('admin.login');
    }
            
}
