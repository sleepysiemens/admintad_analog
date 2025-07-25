<?php

namespace App\Livewire;

use App\Models\Offer;
use Illuminate\View\View;
use Livewire\Component;

class GetOfferLink extends Component
{
    public function open_form(): void
    {
        $this->dispatch('open-form');
    }

    public function render(): View
    {
        return view('livewire.get-offer-link');
    }
}
