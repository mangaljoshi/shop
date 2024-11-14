<?php
namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    // Admin Dashboard
    public function index()
    {
        // Example: Fetch the admin user
        $admin = Auth::guard('admin')->user();

        // Pass the admin user data to the view
        return view('admin.dashboard', compact('admin'));
    }

    // Admin Logout
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
