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
            'body' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpng'
        ]);

        $image_name = rand() . '_' . time() . '_' . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads'), $image_name);

        Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $image_name,

        ]);

        return redirect()->route('posts.index')->with('success', 'Post Created!');
    }

    function destroy($id)
    {
        // return $id;
        Post::destroy($id);

        return redirect()->route('posts.index')->with('success', 'Post Deleated!');
    }

    function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit', compact('post'));
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5|max:40',
            'body' => 'required',
            'image' => 'nullable|image|mimes:png,jpg,jpng'
        ]);
        $post = Post::find($id);
        $image_name = $post->image;

        if ($request->hasFile('image')) {
            $image_name = rand() . '_' . time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads'), $image_name);
        }
        $post->update([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $image_name
        ]);

        return redirect()->route('posts.index')->with('success', 'Post Updated!');
    }
}
