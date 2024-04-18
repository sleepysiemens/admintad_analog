<?php

namespace App\Livewire;

use App\Models\Offer;
use Livewire\Component;

class DashboardOffers extends Component
{
    public $new=true;
    public $recomended=false;

    public function show_new()
    {
        $this->new=true;
        $this->recomended=false;
    }

    public function show_recomended()
    {
        $this->new=false;
        $this->recomended=true;
    }

    public function render()
    {
        $offers=Offer::query()->orderBy('created_at','DESC')->limit(10)->get();


        return view('livewire.dashboard-offers', compact(['offers']));
    }
}
