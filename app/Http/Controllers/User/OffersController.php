<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Offer;
use App\Models\UserOffer;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function index()
    {
        $offers=Offer::all();

        return view('pages.user.offers.index', compact(['offers']));
    }

    public function show(Offer $offer)
    {
        $offer_rules=Content::query()->where('title','=','Правила офферов')->first();

        $has_offer=UserOffer::query()
            ->where('user_id','=',auth()->user()->id)
            ->where('offer_id','=',$offer->id)
            ->exists();
        $personal_link='';

        if($has_offer)
        {
            $personal_offer=UserOffer::query()
                ->where('user_id','=',auth()->user()->id)
                ->where('offer_id','=',$offer->id)
                ->first();
            $personal_link=$personal_offer->link;
        }

        return view('pages.user.offers.show', compact(['offer', 'has_offer', 'personal_link', 'offer_rules']));
    }

    public function get_link(Offer $offer)
    {
        $link=hash('md5',auth()->user()->email.date("Ymd-m-Y-H-i-s"));
        $link=str_replace('/','',$link);

        UserOffer::create(
            [
                'user_id'=>auth()->user()->id,
                'offer_id'=>$offer->id,
                'link'=>$link,
            ]
        );
        return redirect()->route('user.offers.show',$offer->id);
    }
}
