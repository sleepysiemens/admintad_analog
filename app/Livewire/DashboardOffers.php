<?php

namespace App\Livewire;

use App\Models\Offer;
use Livewire\Component;

class DashboardOffers extends Component
{
    public $show_recomended=false;

    public function change_show()
    {
        $this->show_recomended=!$this->show_recomended;
    }

    public function render()
    {
        if($this->show_recomended){
            $offers=Offer::query()
                ->join('user_offers','user_offers.offer_id','=','offers.id')
                ->select('offers.*')
                ->limit(10)
                ->get();
        }else{
            $offers=Offer::query()
                ->orderBy('created_at','DESC')
                ->join('user_offers','user_offers.offer_id','=','offers.id')
                ->select('offers.*')
                ->limit(10)
                ->get();
        }

        return view('livewire.dashboard-offers', compact(['offers']));
    }
}
