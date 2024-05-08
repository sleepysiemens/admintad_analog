<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class PaymentOverlay extends Component
{
    /**
     * @var bool
     */
    public bool $is_visible = false;

    /**
     * @var string
     */
    public string $currency = '';

    public $remain = 0;

    /**
     * @param $currency
     * @return void
     */
    #[On('open-payment-form')]
    public function change_visibility($args = null)
    {
        $this->is_visible = !$this->is_visible;
        if($args !== null) {
            $this->currency = $args['currency'];
            $this->remain = $args['remain'];
        }
    }

    public function render()
    {
        return view('livewire.payment-overlay');
    }
}
