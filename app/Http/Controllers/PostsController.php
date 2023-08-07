<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    function index()
    {
        // $posts = Post::paginate(5);
        // $posts = Post::orderBy('id', 'Desc')->paginate(20);
        $posts = Post::orderByDesc('id')->paginate(20);
        // $posts = Post::orderByDesc('id')->get();
        return view('posts.index', compact('posts'));
    }
}
