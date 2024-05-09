<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('pages.blog.index');
    }

    public function show(BlogPost $post)
    {
        return view('pages.blog.show', compact('post'));
    }
}
