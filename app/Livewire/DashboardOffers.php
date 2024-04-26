<?php

namespace App\Livewire;

use App\Models\Offer;
use Livewire\Component;

class DashboardOffers extends Component
{
    public $show_recomended=false;

    public function change_show($value)
    {
        $this->show_recomended = $value;
    }

    public function render()
    {
        if($this->show_recomended){
            $offers=Offer::query()
                ->select('offers.*')
                ->limit(10)
                ->get();
        }else{
            $offers=Offer::query()
                ->orderBy('created_at','DESC')
                ->select('offers.*')
                ->limit(10)
                ->get();
        }

        return view('livewire.dashboard-offers', compact(['offers']));
    }
}
