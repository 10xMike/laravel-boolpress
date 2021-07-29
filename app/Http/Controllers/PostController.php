<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        //ddd($posts);
        return view('guests.posts.index')->with('posts', $posts);
    }

    public function show(Post $post)
    {
        return view('guests.posts.show', compact('post'));
    }
}
