<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsPost;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news=NewsPost::query()->orderBy('created_at','desc')->get();
        return view('pages.dashboard.news.index', compact('news'));
    }

    public function create()
    {
        return view('pages.dashboard.news.create');
    }

    public function store(Request $request)
    {
        $data=[
            'title'=>$request->title,
            'description'=>$request->description,
            'offer_id'=>$request->offer_id,
        ];

        NewsPost::create($data);

        return redirect()->route('admin.news.index');
    }

    public function edit(NewsPost $news)
    {
        return view('pages.dashboard.news.edit', compact('news'));
    }

    public function update(Request $request, NewsPost $news)
    {
        $data=$request->all();

        unset($data['_method']);
        unset($data['_token']);
        unset($data['files']);
        $news->update($data);
        return redirect()->route('admin.news.index');
    }

    public function delete(NewsPost $news)
    {
        $news->delete();
        return redirect()->route('admin.news.index');
    }
}
