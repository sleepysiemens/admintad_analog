<?php

namespace App\Livewire;

use App\Models\Offer;
use Illuminate\View\View;
use Livewire\Component;

class DashboardOffers extends Component
{
    public bool $show_recomended = false;

    public function change_show(bool $value): void
    {
        $this->show_recomended = $value;
    }

    public function render(): View
    {
        if ($this->show_recomended) {
            $offers = Offer::query()
                ->select('offers.*')
                ->limit(10)
                ->get();
        } else {
            $offers = Offer::query()
                ->orderBy('created_at','DESC')
                ->select('offers.*')
                ->limit(10)
                ->get();
        }

        return view('livewire.dashboard-offers', compact(['offers']));
    }
}
