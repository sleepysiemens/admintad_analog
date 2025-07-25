<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        $posts = BlogPost::all();
        return view('pages.dashboard.blog.index', compact(['posts']));
    }

    public function create(): View
    {
        return view('pages.dashboard.blog.create');
    }

    public function store(Request $request): RedirectResponse
    {
        BlogPost::query()->create(['title' => $request->title, 'img' => $request->img, 'description' => $request->description, 'category' => $request->category]);

        return redirect()->route('admin.blog.index');
    }

    public function show(BlogPost $post): View
    {
        return view('pages.dashboard.blog.show', compact('post'));
    }

    public function edit(BlogPost $post): View
    {
        return view('pages.dashboard.blog.edit', compact('post'));
    }

    public function update(Request $request, BlogPost $post): RedirectResponse
    {
        $post->update(['title' => $request->title, 'img' => $request->img, 'description' => $request->description, 'category' => $request->category]);

        return redirect()->route('admin.blog.index');
    }

}
