<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function chart()
    {
        return view('chart');
    }

    public function posts()
    {
        return view('posts');
    }

    public function user()
    {
        return view('users');
    }

    public function profile()
    {
        return view('profile');
    }

    public function setting()
    {
        return view('setting');
    }
}
