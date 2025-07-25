<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsPost;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function index(): View
    {
        $news = NewsPost::query()->orderBy('created_at','desc')->get();

        return view('pages.dashboard.news.index', compact('news'));
    }

    public function create(): View
    {
        return view('pages.dashboard.news.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = [
            'title'       => $request->title,
            'description' => $request->description,
            'offer_id'    => $request->offer_id,
        ];

        NewsPost::query()->create($data);

        return redirect()->route('admin.news.index');
    }

    public function edit(NewsPost $news): View
    {
        return view('pages.dashboard.news.edit', compact('news'));
    }

    public function update(Request $request, NewsPost $news): RedirectResponse
    {
        $data = $request->all();

        unset($data['_method']);
        unset($data['_token']);
        unset($data['files']);
        $news->update($data);

        return redirect()->route('admin.news.index');
    }

    public function delete(NewsPost $news): RedirectResponse
    {
        $news->delete();

        return redirect()->route('admin.news.index');
    }
}
