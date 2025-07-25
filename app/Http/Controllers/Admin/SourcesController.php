<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AutoSource;
use App\Models\NewsPost;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SourcesController extends Controller
{
    public function index(): View
    {
        return view('pages.dashboard.sources.index');
    }

    public function auto(): View
    {
        $sources = AutoSource::query()->orderBy('id','DESC')->get();

        return view('pages.dashboard.sources.auto', compact('sources'));
    }

    public function store(): RedirectResponse
    {
        AutoSource::query()->create(['url' => request()->url]);

        return redirect()->route('admin.sources.auto');
    }

    public function delete(AutoSource $source): RedirectResponse
    {
        $source->delete();

        return redirect()->route('admin.sources.auto');
    }
}
