<?php

namespace App\Livewire;

use App\Models\Payout;
use Illuminate\View\View;
use Livewire\Component;

class TicketsNotifications extends Component
{
    public function render(): View
    {
        $notifications = Payout::query()->where('status', 'В обработке')->count();

        return view('livewire.notifications-count', compact('notifications'));
    }
}
