<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Admin_dashboard(){
        return view('admin.admin_dashboard');
    }

    /// admin Admin_logout
    // public function Admin_logout(){
    //     return view('admin.admin_login');
    // }

    //Admin_login
    public function Admin_login(){
        return view('admin.admin_login');
    }

    public function Admin_logout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
 
    }

    // Admin_register
    // public function Admin_register(){
    //     return view('admin.admin_register');
    // }
}
