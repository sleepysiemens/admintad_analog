<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\UserOffer;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function index($link)
    {
        $user_offer=UserOffer::query()->where('link','=',$link)->first();
        $offer=Offer::query()->where('id','=',$user_offer->offer_id)->first();
        $redirect_link=$offer->link;

        $user_offer->clicks=$user_offer->clicks+1;

        $hosts=json_decode($user_offer->host);

        if($hosts==null)
        {
            $hosts[] = $_SERVER['REMOTE_ADDR'];
            $user_offer->host=json_encode($hosts);
            $user_offer->host_count=$user_offer->host_count+1;
        }
        elseif (!in_array($_SERVER['REMOTE_ADDR'], $hosts))
        {
            $hosts[] = $_SERVER['REMOTE_ADDR'];
            $user_offer->host=json_encode($hosts);
            $user_offer->host_count=$user_offer->host_count+1;
        }

        //TB
        $user_offer->tb=$user_offer->clicks-$user_offer->host_count;

        //Unique CR
        $user_offer->unique_cr=round((($user_offer->host_count/$user_offer->clicks)),2);

        $user_offer->update();
        //dd($user_offer);


        return redirect($redirect_link);
    }
}
