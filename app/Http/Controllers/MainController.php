<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function landing()
    {
        $posts = Post::where('status', 'publish')->orderByDesc('updated_at')->get()->take(3)->map(function ($post) {
            $post->updated = $post->updated_at->diffForHumans();
            $post->description = substr($post->description, 0, 300);
            return $post;
        });
        return view('landing', compact('posts'));
    }

    public function news(Request $request)
    {
        $request->validate([
            'page' => 'nullable|numeric',
        ]);

        $postsPerPage = 5;
        $totalPosts = Post::where('status', 'publish')->count();
        $totalPages = ceil($totalPosts / $postsPerPage);
        $currentPage = $request->input('page') ?? 1;

        $posts = Post::where('status', 'publish')
            ->skip(($currentPage - 1) * $postsPerPage)
            ->orderByDesc('updated_at')
            ->take($postsPerPage)
            ->get()
            ->map(function ($post) {
                $post->updated = $post->updated_at->diffForHumans();
                $post->description = substr($post->description, 0, 400);
                return $post;
            });

        return view('news', compact('posts', 'totalPages', 'currentPage'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function concept()
    {
        return view('concept');
    }

    public function linac()
    {
        return view('linac');
    }

    public function post($slug)
    {
        $post = Post::with('author')->whereSlug($slug)->first();
        $post->updated = $post->updated_at->format('M jS Y');
        return view('post', compact('post'));
    }
}
