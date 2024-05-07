<?php

namespace App\Livewire;

use App\Models\Payout;
use Livewire\Component;

class TicketsNotifications extends Component
{
    public function render()
    {
        $notifications = Payout::query()->where('status', 'В обработке')->count();
        return view('livewire.notifications-count', compact('notifications'));
    }
}
