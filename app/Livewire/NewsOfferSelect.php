<?php

namespace App\Livewire;

use App\Models\Offer;
use Illuminate\View\View;
use Livewire\Component;

class NewsOfferSelect extends Component
{
    public mixed $selected;

    public function mount($selected = null): void
    {
        $this->selected = $selected;
    }

    public function render(): View
    {
        $offers = Offer::all();

        return view('livewire.news-offer-select', compact('offers'));
    }
}
