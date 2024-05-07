<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\UserOffer;
use Illuminate\Http\Request;

class StatController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.stat.index');
    }
}
