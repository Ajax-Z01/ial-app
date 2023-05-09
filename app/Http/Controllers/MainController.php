<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class MainController extends Controller
{
    public function landing()
    {
        return view('landing');
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
