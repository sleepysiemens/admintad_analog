<?php

namespace App\Livewire;

use App\Models\Offer;
use Livewire\Component;

class NewsOfferSelect extends Component
{
    public $selected;

    public function mount($selected=null)
    {
        $this->selected = $selected;
    }

    public function render()
    {
        $offers=Offer::all();
        return view('livewire.news-offer-select', compact('offers'));
    }
}
