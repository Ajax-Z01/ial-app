<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'username' => 'required|unique:users|min:5|max:20|alpha_dash',
            'name' => 'required|min:5|max:50|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email|unique:users|max:50',
            'password' => 'required|min:8|max:20',
        ], [
            'username.required' => 'Username is required.',
            'username.unique' => 'Username is already taken.',
            'username.min' => 'Username must be at least 5 characters.',
            'username.max' => 'Username cannot exceed 20 characters.',
            'username.alpha_dash' => 'Username can only contain letters, numbers, dashes, and underscores.',
            'name.required' => 'Name is required.',
            'name.min' => 'Name must be at least 5 characters.',
            'name.max' => 'Name cannot exceed 50 characters.',
            'name.regex' => 'Name can only contain letters and spaces.',
            'email.required' => 'Email is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'Email cannot exceed 50 characters.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 8 characters.',
            'password.max' => 'Password cannot exceed 20 characters.',
        ]);

        $user = new User();
        $user->username = $request->input('username');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        $notification = new Notification();
        $notification->model()->associate($user);
        $notification->content = 'has been created.';
        $notification->save();

        return redirect()->route('login')->withSuccess('Your account has been successfully registered. Please wait until your account is approved by the administrator.');
    }
}
