<?php

namespace App\Livewire;

use App\Models\UserSource;
use Livewire\Component;

class NotificationsCount extends Component
{
    public function render()
    {
        $notifications = UserSource::query()->where('status', 'На проверке')->count();

        return view('livewire.notifications-count', compact('notifications'));
    }
}
