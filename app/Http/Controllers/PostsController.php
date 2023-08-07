<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    function index()
    {
        $count = 20;
        if (request()->has('count')) {
            $count = request()->count;
        }
        if (request()->count == 'all') {
            $count = Post::count();
        }
        if (request()->has('s') && !empty(request()->s)) {
            $posts = Post::orderByDesc('id')->where('title', 'like', '%' . request()->s . '%')->paginate($count);
        } else {
            $posts = Post::orderByDesc('id')->paginate($count);
        }

        // $posts = Post::paginate(5);
        // $posts = Post::orderBy('id', 'Desc')->paginate(20);
        return view('posts.index', compact('posts'));
    }

    function create()
    {
        return view('posts.create');
    }

    function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:40',
            'body' => 'required'
        ]);

        Post::create([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect()->route('posts.index');
    }
}
