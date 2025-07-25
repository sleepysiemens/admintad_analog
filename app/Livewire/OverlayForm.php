<?php

namespace App\Livewire;

use App\Models\Offer;
use App\Models\UserOffer;
use App\Models\UserSource;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class OverlayForm extends Component
{
    public int $offer_id;
    public bool $is_visible = false;

    public function mount($offer_id)
    {
        $this->offer_id = $offer_id;
    }
    #[On('open-form')]
    public function change_visibility(): void
    {
        $this->is_visible = ! $this->is_visible;
    }

    public function render(): View
    {
        $offer = Offer::query()->where('id',$this->offer_id)->first();
        $sources = UserSource::query()
            ->where('user_id', auth()->user()->id)
            ->where('status', 'Принят')
            ->get();

        return view('livewire.overlay-form', compact('offer', 'sources'));
    }
}
