<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $offers = Offer::query()->limit(3)->get();
        return view('pages.landing.index', compact('offers'));
    }
}
