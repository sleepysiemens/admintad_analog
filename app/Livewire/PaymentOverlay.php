<?php

namespace App\Livewire;

use Illuminate\View\View;
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

    public int $remain = 0;

    #[On('open-payment-form')]
    public function change_visibility($args = null): void
    {
        $this->is_visible = ! $this->is_visible;

        if ($args) {
            $this->currency = $args['currency'];
            $this->remain = $args['remain'];
        }
    }

    public function render(): View
    {
        return view('livewire.payment-overlay');
    }
}
