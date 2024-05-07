<?php

namespace App\Livewire;

use App\Models\Payout;
use App\Models\User;
use App\Models\UserSource;
use Livewire\Component;

class TicketsList extends Component
{

    public function change_status(Payout $payout ,$status)
    {
        if($status == 'Исполнен'){
            $user = User::query()->where('id', $payout->user_id)->first();
            $user->{$payout->currency} = $user->{$payout->currency} - $payout->payment_amount;
            $user->save();
        }

        $payout->update(['status' => $status]);
        $this->dispatch('update-ticket-status');
    }

    public function render()
    {
        $payouts = Payout::query()->orderBy('created_at', 'desc')->get();
        return view('livewire.tickets-list', compact(['payouts']));
    }
}
