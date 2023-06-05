<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postsPerPage = 10;
        $totalPosts = Post::count();
        $totalPages = ceil($totalPosts / $postsPerPage);
        $currentPage = request()->page ?? 1;

        $query = Post::query();

        // Filter berdasarkan pencarian judul
        if (request()->has('search')) {
            $search = request()->input('search');
            $query->where('title', 'LIKE', "%$search%")->orWhere('subtitle', 'LIKE', "%$search%")->orWhere('status', 'LIKE', "%$search%");
        }

        $posts = $query->skip(($currentPage - 1) * $postsPerPage)->take($postsPerPage)->get();

        return view('posts', compact('posts', 'totalPages', 'currentPage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'author_id' => 'required',
            'status' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $post = new Post;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->author_id = $request->author_id;
        $post->description = $request->description;
        $post->slug = Str::slug($request->slug);

        if ($request->hasFile('image')) {
            $name = Str::slug($request->title) . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $name);
            $post->image = 'uploads/' . $name;
        }

        $post->save();
        return redirect()->route('posts')->withSuccess('Post Created Successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('post-show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('post-edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'author_id' => 'required',
            'status' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // tambahkan aturan validasi untuk file gambar jika diperlukan
        ]);

        $post = Post::find($id);
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->author_id = $request->author_id;
        $post->status = $request->status;
        $post->description = $request->description;
        $post->slug = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $name = Str::slug($request->title) . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $name);
            $post->image = '/uploads/' . $name;
        }
        $post->save();

        return redirect()->route('posts')->withSuccess("Post Updated Successfully");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect()->route('posts')->withSuccess('Post Deleted Successfully');
    }
}
