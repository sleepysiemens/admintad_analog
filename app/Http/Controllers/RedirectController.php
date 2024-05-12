<?php

namespace App\Http\Controllers;

use App\Models\DailyStatistic;
use App\Models\Offer;
use App\Models\UserOffer;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function index($link)
    {
        $user_offer=UserOffer::query()->where('link','=',$link)->first();

        $daily_statistic = DailyStatistic::firstOrCreate(['user_offer_id' => $user_offer->offer_id, 'created_at' => date("Y-m-d", strtotime('today'))]);

        $redirect_link=Offer::query()->where('id','=',$user_offer->offer_id)->first()->link;
        $offer_country=Offer::query()->where('id','=',$user_offer->offer_id)->first()->country;

        $daily_statistic->hits=$daily_statistic->hits + 1;

        $hosts=json_decode($daily_statistic->host);

        if($hosts==null)
        {
            $hosts[] = $_SERVER['REMOTE_ADDR'];
            $daily_statistic->hosts = json_encode($hosts);
            #$daily_statistic->hosts_count = $daily_statistic->hosts_count + 1;
        }
        elseif (!in_array($_SERVER['REMOTE_ADDR'], $hosts))
        {
            $hosts[] = $_SERVER['REMOTE_ADDR'];
            $daily_statistic->hosts = json_encode($hosts);
            $daily_statistic->hosts_count = $daily_statistic->hosts_count + 1;
        }

        //TB
        $user_ip = getenv('REMOTE_ADDR');
        $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
        $country = strtolower($geo["geoplugin_countryName"]);

        if(strtolower($offer_country) != ($country)){
            $daily_statistic->tb = $daily_statistic->tb + 1;
        }

        $daily_statistic->tb = $daily_statistic->hits - $daily_statistic->hosts_count;

        //Unique CR
        $daily_statistic->unique_cr = round((($daily_statistic->hosts_count / $daily_statistic->hits)),2);

        $daily_statistic->update();
        //dd($user_offer);

        return redirect($redirect_link);
    }
}
