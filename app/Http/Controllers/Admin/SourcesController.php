<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AutoSource;
use App\Models\NewsPost;
use GuzzleHttp\Psr7\Request;

class SourcesController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.sources.index');
    }

    public function auto()
    {
        $sources= AutoSource::query()->orderBy('id','DESC')->get();
        return view('pages.dashboard.sources.auto', compact('sources'));
    }

    public function store()
    {
        AutoSource::create(['url' => request()->url]);
        return redirect()->route('admin.sources.auto');
    }

    public function delete(AutoSource $source)
    {
        $source->delete();
        return redirect()->route('admin.sources.auto');
    }
}
