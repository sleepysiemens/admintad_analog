<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class RulesController extends Controller
{
    public function index(): View
    {
        return view('pages.dashboard.rules.index');
    }
}
