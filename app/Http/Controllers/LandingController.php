<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LandingController extends Controller
{
    public function index(): View
    {
        $offers = Offer::query()->limit(3)->get();

        return view('pages.landing.index', compact('offers'));
    }
}
