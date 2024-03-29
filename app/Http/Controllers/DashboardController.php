<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Filamen;
use App\Models\FormResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalPosts = Post::count();
        $totalUsers = User::count();
        $totalData = Filamen::count();
        $totalMessages = FormResponse::count();
        $today = Carbon::today();
        $newUsersCount = User::whereDate('created_at', $today)->count();
        $newPostsCount = Post::whereDate('created_at', $today)->count();
        $newDataCount = Filamen::whereDate('created_at', $today)->count();
        $newMessagesCount = FormResponse::whereDate('created_at', $today)->count();

        return view('dashboard', compact('totalPosts', 'totalUsers', 'totalData', 'totalMessages', 'newUsersCount', 'newPostsCount', 'newDataCount', 'newMessagesCount'));
    }

    public function profile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function video()
    {
        return view('video');
    }
}
