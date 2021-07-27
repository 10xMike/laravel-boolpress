<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('guests.posts.index')->with('post', $post);
    }

    public function show()
    {
        return view('guests.posts.show')->with('post', $post);
    }
}
