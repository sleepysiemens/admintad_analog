<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class TicketsController extends Controller
{
    public function index(): View
    {
        return view('pages.dashboard.tickets.index');
    }
}
