<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index(): View
    {
        return view('pages.dashboard.main.index');
    }
}
