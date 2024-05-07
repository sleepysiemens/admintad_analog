<?php

namespace App\Livewire;

use App\Models\DailyStatistic;
use App\Models\UserOffer;
use Illuminate\Support\Collection;
use Livewire\Component;

class StatisticList extends Component
{
    public $date = '';
    public string $start_date = '';
    public string $end_date = '';
    public string $period = 'today';

    public function mount()
    {
        $this->date = date('Y-m-d', strtotime('today'));
    }

    public function change_period( string $period, string $date)
    {
        $this->period = $date;
        switch ($period) {
            case 'day':
                if($date == 'today'){
                    $this->date = 'today';
                }elseif ($date == 'yesterday'){
                    $this->date = 'yesterday';
                }
                break;

            case 'week':
                $this->start_date = 'monday this week';
                $this->end_date = 'sunday this week';
                break;

            case 'month':
                $this->start_date = 'first day of this month';
                $this->end_date = 'last day of this month';
                break;
        }
    }

    public function render()
    {
        $user_offers = UserOffer::query()
            ->join('offers', 'offers.id', 'user_offers.offer_id')
            ->where('user_offers.user_id','=',auth()->user()->id)
            ->select('user_offers.*', 'offers.title')
            ->get();

        $offers = [];

        foreach ($user_offers as $user_offer){
            if($this->period == 'today' || $this->period == 'yesterday')
            {
                $new_line = DailyStatistic::firstOrCreate(['user_offer_id' => $user_offer->offer_id, 'created_at' => date("Y-m-d", strtotime($this->date))]);
                $new_line->title = $user_offer->title;
                $offers[] = $new_line;
            }else {
                $date = date("Y-m-d", strtotime($this->start_date));

                $start_value = DailyStatistic::firstOrCreate(['user_offer_id' => $user_offer->offer_id, 'created_at' => $date]);

                while ($date <= date("Y-m-d", strtotime($this->end_date))){
                    $value = DailyStatistic::firstOrCreate(['user_offer_id' => $user_offer->offer_id, 'created_at' => date("Y-m-d", strtotime($date))]);

                    $start_value->hosts_count = $start_value->hosts_count + $value->hosts_count;
                    $start_value->hits = $start_value->hits + $value->hits;
                    $start_value->tb = $start_value->tb + $value->tb;

                    $start_value->total = $start_value->total + $value->total;
                    $start_value->approval = $start_value->approval + $value->approval;
                    $start_value->waiting = $start_value->waiting + $value->waiting;
                    $start_value->hold = $start_value->hold + $value->hold;
                    $start_value->canceled = $start_value->canceled + $value->canceled;
                    $start_value->trash = $start_value->trash + $value->trash;

                    $start_value->rub = $start_value->rub + $value->rub;
                    $start_value->usd = $start_value->usd + $value->usd;
                    $start_value->eur = $start_value->eur + $value->eur;

                    $date = date("Y-m-d", strtotime('+ 1 day', strtotime($date)));
                }

                $start_value->title = $user_offer->title;
                $offers[] = $start_value;
            }
        }

        return view('livewire.statistic-list', compact(['offers']));
    }
}
