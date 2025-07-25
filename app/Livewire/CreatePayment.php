<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class CreatePayment extends Component
{
    /**
     * @var string
     */
    public string $currency = '';

    public int $remain = 0;

    /**
     * @param $currency
     * @return void
     */
    public function mount($currency, $remain): void
    {
        $this->currency = $currency;
        $this->remain = $remain;
    }

    public function open_payment_form(): void
    {
        $this->dispatch('open-payment-form', ['currency' => $this->currency, 'remain' => $this->remain]);
    }

    public function render(): View
    {
        return view('livewire.create-payment');
    }
}
