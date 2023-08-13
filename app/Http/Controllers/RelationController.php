<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Insurance;
use App\Models\Post;
use App\Models\Student;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function one_to_one()
    {
        // $user = User::find(1);
        // dd($user->insurance);

        // $insurance = Insurance::find(1);
        // dd($insurance->user);

        $users = User::with('insurance')->get();

        return view('relation.one_to_one', compact('users'));
    }

    public function one_to_many()
    {
        // $post = Post::find(2);
        // dd($post->comments);

        // $comment = Comment::find(2);
        // dd($comment->post->title);

        // $post = Post::find(2);

        // return view('relation.one_to_many', compact('post'));

        $user = User::find(1);
        dd($user->comments);
    }

    public function one_to_many_data(Request $request)
    {
        Comment::create([
            'comment' => $request->comment,
            'post_id' => $request->post_id,
            'user_id' => 3
        ]);
        // dd($request->all());
        return redirect()->back();
    }

    public function many_to_many()
    {
        // $std = Student::find(1);
        // dd($std->subjects);

        $sub = Subject::find(4);
        dd($sub->students);
    }
}
