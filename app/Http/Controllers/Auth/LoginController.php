<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function showLoginForm()
    {
        if (Auth::check()) {
            // If user is already logged in, redirect based on role
            if (Auth::user()->role == 'client') {
                return redirect('/client/dashboard');
            } elseif (Auth::user()->role == 'worker') {
                return redirect('/worker/dashboard');
            } elseif (Auth::user()->role == 'admin') {
                return redirect('/admin/dashboard');
            }
        }

        return view('general.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('role', 'email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'client') {
                return redirect()->route('client.dashboard');
            } elseif ($user->role === 'worker') {
                return redirect()->route('worker.dashboard');
            } elseif ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            }
        }

        return back()->withErrors(['message' => 'Invalid credentials']);
    }


    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/login');
    }
}