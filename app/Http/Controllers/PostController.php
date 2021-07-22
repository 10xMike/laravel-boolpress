<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('guests.posts.index', compact('posts'));
    }

    public function show()
    {
        return view('guests.posts.show', compact('post'));
    }
}
