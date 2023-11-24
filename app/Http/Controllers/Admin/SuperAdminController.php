<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function SuperAdmin_dashboard(){
        return view('superadmin.superadmin_dashboard');
    }

    public function SuperAdmin_login(){
        return view('superadmin.superadmin_login');
    }

    public function SuperAdmin_logout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/superadmin/login');
 
    }
}
