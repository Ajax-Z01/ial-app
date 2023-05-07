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
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->type == 'admin') {
                return redirect()->route('admin.admin')->withSuccess("Welcome to Dashboard Admin");
            } else if (Auth::user()->type == 'user') {
                return redirect()->route('user.user')->withSuccess("Welcome to Dashboard User");
            } else {
                return redirect()->route('login')->withUnsuccess("Your account is not verified. Please contact the administrator.");
            }
        }
        return redirect()->route('login');
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
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('login')->withSuccess('Your account has been successfully registered.');
    }
}
