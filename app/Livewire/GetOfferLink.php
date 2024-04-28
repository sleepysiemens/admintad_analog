<?php

namespace App\Livewire;

use App\Models\Offer;
use Livewire\Component;

class GetOfferLink extends Component
{
    public function open_form()
    {
        $this->dispatch('open-form');
    }

    public function render()
    {
        return view('livewire.get-offer-link');
    }
}
