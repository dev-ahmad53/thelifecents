<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::latest('published_date')->paginate(9);
        return view('blog', compact('posts'));
    }

    public function show($slug)
    {
        $post = BlogPost::where('slug', $slug)->firstOrFail();
        return view('blog-detail', compact('post'));
    }
}