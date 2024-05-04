<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\UserOffer;
use Illuminate\Http\Request;

class StatController extends Controller
{
    public function index()
    {
        $offers=UserOffer::query()->where('user_id','=',auth()->user()->id)->get();
        return view('pages.dashboard.stat.index', compact(['offers']));
    }
}
