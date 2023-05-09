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

    public function post()
    {
        return view('post');
    }

    public function user()
    {
        return view('user');
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
