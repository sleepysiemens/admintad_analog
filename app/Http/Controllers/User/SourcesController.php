<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AutoSource;
use App\Models\NewsPost;
use App\Models\UserSource;
use Illuminate\Http\Request;

class SourcesController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.sources.index');
    }

    public function create()
    {
        return view('pages.dashboard.sources.create');
    }

    public function store(Request $request)
    {
        $data=[
            'title' => $request->title,
            'link' => $request->link,
            'user_id' => auth()->user()->id,
            'description' => $request->description,
        ];

        $link = explode('/', $request->link);

        if(AutoSource::query()->where('url', 'like', '%'.$link[0].'//'.$link[2].'%')->exists()){
            $data['status'] = 'Принят';
        }

        UserSource::create($data);
        return redirect()->route('user.sources.index');
    }
}
