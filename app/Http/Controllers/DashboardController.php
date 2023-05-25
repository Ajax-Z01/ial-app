<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Filamen;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalPosts = Post::count();
        $totalUsers = User::count();
        $totalData = Filamen::count();
        $today = Carbon::today();
        $newUsersCount = User::whereDate('created_at', $today)->count();
        $newPostsCount = Post::whereDate('created_at', $today)->count();
        $newDataCount = Filamen::whereDate('created_at', $today)->count();

        return view('dashboard', compact('totalPosts', 'totalUsers', 'totalData', 'newUsersCount', 'newPostsCount', 'newDataCount'));
    }

    public function profile()
    {
        return view('profile');
    }

    public function video()
    {
        return view('video');
    }
}
