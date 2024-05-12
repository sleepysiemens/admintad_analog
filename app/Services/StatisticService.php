<?php

namespace App\Services;

use App\Models\DailyStatistic;
use App\Models\UserOffer;

class StatisticService
{
    public function update_statistic($data)
    {
        $user_offer=DailyStatistic::query()
            ->join('user_offers', 'daily_statistics.user_offer_id', 'user_offers.id')
            ->join('offers','offers.id','=','user_offers.offer_id')
            ->where('offers.source_offer_id',$data['id_offer'])
            ->where('hosts','like','%'.$data['ip'].'%')
            ->first();

        if($user_offer!=null)
        {
            switch ($data->status)
            {
                case 'in_processing':
                case 'new':
                    $user_offer->waiting++;
                    $user_offer->total++;
                    break;

                case 'fake':
                    $user_offer->trash++;
                    $user_offer->total++;
                    break;

                case 'canceled':
                    $user_offer->canceled++;
                    $user_offer->total++;
                    break;

                case 'success':
                    $user_offer->approved++;
                    $user_offer->total++;
                    break;
            }


            //CR
            $user_offer->cr=($user_offer->waiting + $user_offer->approved + $user_offer->hold)/ $user_offer->host_count;

            //APPROVAL RATE
            $user_offer->approval_rate=($user_offer->approved)/ $user_offer->host_count;

            $user_offer->save();
        }
    }
}
