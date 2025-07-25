<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Offer;
use App\Models\UserOffer;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OfferController extends Controller
{
    public function index(): View
    {
        return view('pages.offers.index');
    }

    public function show(Offer $offer): View
    {
        $offer_rules = Content::query()->where('title','=','Правила офферов')->first();
        $traffic_sources = Content::query()->where('title','=','Источники трафика')->first();

        return view('pages.offers.show', compact(['offer', 'offer_rules', 'traffic_sources']));

    }
}
