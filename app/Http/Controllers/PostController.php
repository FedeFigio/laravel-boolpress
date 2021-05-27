<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('guests.posts.show',compact('post'));
    }
}
