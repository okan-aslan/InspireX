<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function register()
    {
        return view('Auth.register');
    }

    public function authenticate(Request $request)
    {
        $request->only('email', 'password');

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:255',
        ]);

        if (auth()->attempt($validated)) {
            request()->session()->regenerate();

            return redirect()->route('dashboard.index')->with('success', 'User logged-in successfully ...');
        }
        return redirect()->route('login')->with('error', 'No matching user found with the provided email or password !!!');
    }

    public function store(User $user, StoreUserRequest $request)
    {
        $user->create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('login')->with('success', 'Account created successfully ...');
    }

    public function logout()
    {

    }
}
