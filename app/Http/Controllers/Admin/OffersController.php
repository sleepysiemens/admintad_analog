<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\NewsPost;
use App\Models\Offer;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function index()
    {
        $offers=Offer::all();

        return view('pages.admin.offers.index', compact(['offers']));
    }

    public function show(Offer $offer)
    {
        $traffic_sources=Content::query()->where('title','=','Источники трафика')->first();
        $offer_rules=Content::query()->where('title','=','Правила офферов')->first();
        return view('pages.admin.offers.show', compact(['offer', 'offer_rules', 'traffic_sources']));
    }

    public function edit(Offer $offer)
    {
        return view('pages.admin.offers.edit', compact(['offer']));
    }

    public function create()
    {
        return view('pages.admin.offers.create');
    }

    public function store()
    {
        $data=\request()->all();
        unset($data['_token']);
        unset($data['_method']);
        unset($data['files']);
        Offer::create($data);

        return redirect()->route('admin.offers.index');
    }

    public function update(Offer $offer)
    {
        $data=\request()->all();
        unset($data['_token']);
        unset($data['files']);
        $offer->update($data);

        return redirect()->route('admin.offers.show',$offer->id);
    }

    public function delete(Offer $offer)
    {
        $news = NewsPost::query()->where('offer_id',$offer->id)->get();

        foreach ($news as $post) {
            $post->delete();
        }

        $offer->delete();
        return redirect()->route('admin.offers.index');
    }
}
