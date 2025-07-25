<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class StatController extends Controller
{
    public function index(): View
    {
        return view('pages.dashboard.stat.index');
    }
}
