<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\NewsPost;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function index(): View
    {
        $news = NewsPost::query()->orderBy('created_at','desc')->get();

        return view('pages.dashboard.news.index', compact('news'));
    }
}
