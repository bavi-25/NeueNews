<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        // Validate the request
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $remember = false;
        if ($request->has('remember')) {
            $remember  = true;
        } else {
            $remember = false;
        }
        if (Auth::attempt($credentials, $remember)) {
            return redirect()->intended('admin/news')->with('success', 'You are logged in successfully!');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'You have been logged out successfully!');
    }
}
