<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\NewsPost;
use App\Models\Offer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OffersController extends Controller
{
    public function index(): View
    {
        $offers = Offer::all();

        return view('pages.dashboard.offers.index', compact(['offers']));
    }

    public function show(Offer $offer): View
    {
        $traffic_sources = Content::query()->where('title','=','Источники трафика')->first();
        $offer_rules = Content::query()->where('title','=','Правила офферов')->first();

        return view('pages.dashboard.offers.show', compact(['offer', 'offer_rules', 'traffic_sources']));
    }

    public function edit(Offer $offer): View
    {
        return view('pages.dashboard.offers.edit', compact(['offer']));
    }

    public function create(): View
    {
        return view('pages.dashboard.offers.create');
    }

    public function store(): RedirectResponse
    {
        $data = request()->all();
        unset($data['_token']);
        unset($data['_method']);
        unset($data['files']);

        Offer::query()->create($data);

        return redirect()->route('admin.offers.index');
    }

    public function update(Offer $offer): RedirectResponse
    {
        $data = request()->all();
        unset($data['_token']);
        unset($data['files']);
        $offer->update($data);

        return redirect()->route('admin.offers.show',$offer->id);
    }

    public function delete(Offer $offer): RedirectResponse
    {
        $news = NewsPost::query()->where('offer_id',$offer->id)->get();

        foreach ($news as $post) {
            $post->delete();
        }

        $offer->delete();

        return redirect()->route('admin.offers.index');
    }
}
