<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePayment extends Component
{
    /**
     * @var string
     */
    public string $currency = '';

    public $remain = 0;

    /**
     * @param $currency
     * @return void
     */
    public function mount($currency, $remain)
    {
        $this->currency = $currency;
        $this->remain = $remain;
    }

    public function open_payment_form()
    {
        $this->dispatch('open-payment-form', ['currency' => $this->currency, 'remain' => $this->remain]);
    }

    public function render()
    {
        return view('livewire.create-payment');
    }
}
