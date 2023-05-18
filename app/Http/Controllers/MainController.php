<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class MainController extends Controller
{
    public function landing()
    {
        $posts = Post::where('status', 'publish')->get()->take(3)->map(function ($post) {
            $post->updated = $post->updated_at->diffForHumans();
            $post->description = substr($post->description, 0, 200);
            return $post;
        });
        return view('landing', compact('posts'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function index()
    {
        $posts = Post::where('status', 'publish')->with('admin')->simplePaginate(5);
        return view('index', compact('posts'));
    }
    public function post($slug)
    {
        $post = Post::with('admin')->whereSlug($slug)->first() ?? abort(404, "Wrong way dude...");
        return view('post', compact('post'));
    }
}
