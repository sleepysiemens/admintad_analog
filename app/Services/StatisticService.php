<?php

namespace App\Services;

use App\Models\UserOffer;

class StatisticService
{
    public function update_statistic($data)
    {
        $user_offer=UserOffer::query()->where('host','like','%'.$data->ip.'%')->first();

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
