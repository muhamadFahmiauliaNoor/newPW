<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Login Page
    public function login()
    {
        return view('admin.login');
    }

    // Authenticate admin login
    public function authenticate(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::guard('admin')->attempt($credentials)) {  // gunakan auth untuk admin
        $request->session()->regenerate();  // untuk memperbarui sesi
        return redirect()->intended('admin/dashboard');

    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}


    // Dashboard for Admin
    public function dashboard()
{
    if (auth()->check() && auth()->user()->role === 'admin') {
        return view('admin.dashboard');
    } else {
        return redirect('admin/login')->with('error', 'You must be logged in as an admin.');
    }
}

}
