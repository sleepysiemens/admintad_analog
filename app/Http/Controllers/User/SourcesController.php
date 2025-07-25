<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AutoSource;
use App\Models\UserSource;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SourcesController extends Controller
{
    public function index(): View
    {
        return view('pages.dashboard.sources.index');
    }

    public function create(): View
    {
        return view('pages.dashboard.sources.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = [
            'title'       => $request->title,
            'link'        => $request->link,
            'user_id'     => auth()->user()->id,
            'description' => $request->description,
        ];

        $link = explode('/', $request->link);

        if (AutoSource::query()->where('url', 'like', '%' . $link[0] . '//' . $link[2] . '%')->exists()) {
            $data['status'] = 'Принят';
        }

        UserSource::query()->create($data);

        return redirect()->route('user.sources.index');
    }
}
