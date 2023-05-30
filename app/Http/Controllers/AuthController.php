<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->type == 'admin' && $user->status == 'approved') {
                return redirect()->route('dashboard')->withSuccess("Welcome to Dashboard Admin");
            } else if ($user->type == 'user' && $user->status == 'approved') {
                return redirect()->route('dashboard')->withSuccess("Welcome to Dashboard User");
            } else {
                return redirect()->route('login')->withUnsuccess("Your account is not approved. Please contact the administrator.");
            }
        }

        return redirect()->route('login')->withErrors([
            'email' => 'Invalid email or password.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ], [
            'username.required' => 'Username is required.',
            'name.required' => 'Name is required.',
            'email.required' => 'Email is required.',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 8 characters.',
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('login')->withSuccess('Your account has been successfully registered.');
    }
}
