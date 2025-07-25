<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('pages.blog.index');
    }

    public function show(BlogPost $post): View
    {
        return view('pages.blog.show', compact('post'));
    }
}
