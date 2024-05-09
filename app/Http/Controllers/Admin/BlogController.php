<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function index()
    {
        $posts = BlogPost::all();
        return view('pages.dashboard.blog.index', compact(['posts']));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function create()
    {
        return view('pages.dashboard.blog.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        BlogPost::create(['title' => $request->title, 'img' => $request->img, 'description' => $request->description, 'category' => $request->category]);
        return redirect()->route('admin.blog.index');
    }

    /**
     * @param BlogPost $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function show(BlogPost $post)
    {
        return view('pages.dashboard.blog.show', compact('post'));
    }

    /**
     * @param BlogPost $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function edit(BlogPost $post)
    {
        return view('pages.dashboard.blog.edit', compact('post'));
    }

    public function update(Request $request, BlogPost $post)
    {
        $post->update(['title' => $request->title, 'img' => $request->img, 'description' => $request->description, 'category' => $request->category]);
        return redirect()->route('admin.blog.index');
    }

}
