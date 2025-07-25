<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): RedirectResponse
    {
        if(auth()->user()->is_admin)
            return redirect()->route('admin.main.index');
        else
            return redirect()->route('user.main.index');
    }
}
