<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; // Import the Auth facade
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function showRegistrationForm()
    {
        return view('general.register');
    }


    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
            'service' => $data['service'],
        ]);
    }

    public function register(Request $request)
    {
        Auth::login($this->create($request->all()));

        return redirect()->route('login');
    }
}