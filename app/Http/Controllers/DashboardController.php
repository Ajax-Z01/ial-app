<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalPosts = Post::count();
        $totalUsers = User::count();
        $today = Carbon::today();
        $newUsersCount = User::whereDate('created_at', $today)->count();
        $newPostsCount = Post::whereDate('created_at', $today)->count();

        return view('dashboard', compact('totalPosts', 'totalUsers', 'newUsersCount', 'newPostsCount'));
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
