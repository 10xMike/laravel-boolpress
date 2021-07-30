<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        
            $posts = Post::orderBy('id', 'DESC')->paginate(10);
            
            return view('guests.posts.index', compact('posts'));
        }
    
    

    public function show(Post $post)
    {
        return view('guests.posts.show', compact('post'));
    }
}