<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class PaymentMethods extends Component
{
    /**
     * @var array
     */
    public array $payment_methods = [
        'WebMoney' => [
            'title' => 'WebMoney',
            'commission' => 0,
            'inputs' => [
                [ 'title' => 'WMZ', 'value' => 'webmoney_wmz'],
                [ 'title' => 'WME', 'value' => 'webmoney_wme'],
            ]
        ],
        'Яндекс.Деньги' =>[
            'title' => 'Яндекс.Деньги',
            'commission' => 3,
            'inputs' => [
                [ 'title' => 'Номер кошелька Яндекс. Денег', 'value' => 'yandex_money_number'],
            ]
        ],
        'Qiwi' => [
            'title' => 'Qiwi',
            'commission' => 3,
            'inputs' => [
                [ 'title' => 'Qiwi кошелек', 'value' => 'qiwi_wallet'],
            ]
        ],
        'Capitalist' => [
            'title' => 'Capitalist',
            'commission' => 0,
            'inputs' => [
                [ 'title' => 'Capitalist кошелек USD', 'value' => 'capitalist_usd'],
                [ 'title' => 'Capitalist кошелек RUB', 'value' => 'capitalist_rub'],
            ]
        ],
        'USDT (TRC20)' => [
            'title' => 'USDT (TRC20)',
            'commission' => 0,
            'inputs' => [
                [ 'title' => 'Адрес USDT (TRC20)', 'value' => 'usdt_trc20_address'],
            ]
        ],
        'Банковская карта' => [
            'title' => 'Банковская карта',
            'commission' => 0,
            'inputs' => [
                [ 'title' => 'Номер карты', 'value' => 'debit_card'],
                [ 'title' => 'Название банка', 'value' => 'bank_name'],
            ]
        ],
    ];

    /**
     * @var array
     */
    public array $selected_method = [];

    public function mount(): void
    {
        $this->selected_method = $this->payment_methods['WebMoney'];
    }

    /**
     * @param $method
     * @return Void
     */
    public function select_method($method): void
    {
        $this->selected_method = $this->payment_methods[$method];
    }

    public function render(): View
    {
        return view('livewire.payment-methods');
    }
}
