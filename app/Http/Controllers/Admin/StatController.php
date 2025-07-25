<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\UserOffer;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StatController extends Controller
{
    public function index(): View
    {
        $offers=Offer::all();

        foreach ($offers as $offer) {
            $clicks = UserOffer::query()->where('offer_id','=',$offer->id)->sum('clicks');
            $offer->clicks=$clicks;
        }

        return view('pages.dashboard.stat.index', compact('offers'));
    }
}
