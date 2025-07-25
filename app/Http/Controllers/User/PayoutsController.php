<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Payout;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PayoutsController extends Controller
{
    public function index(): View
    {
        $payouts = Payout::query()
            ->where('user_id', auth()->user()->id)
            ->get();

        $rub_hold = Payout::query()
            ->where('user_id', auth()->user()->id)
            ->where('currency', 'rub')
            ->where('status', 'В обработке')
            ->sum('total_amount');

        $usd_hold = Payout::query()
            ->where('user_id', auth()->user()->id)
            ->where('currency', 'usd')
            ->where('status', 'В обработке')
            ->sum('total_amount');

        return view('pages.dashboard.payouts.index', compact('payouts', 'rub_hold', 'usd_hold'));
    }

    public function store(Request $request): RedirectResponse
    {
        switch ($request->payment_system){
            case 'WebMoney':
                $wallet = auth()->user()->webmoney_wmz.'/'.auth()->user()->webmoney_wme;

                break;
            case 'Qiwi':
                $wallet = auth()->user()->qiwi_wallet;

                break;
            case 'Яндекс.Деньги':
                $wallet = auth()->user()->yandex_money_number;

                break;
            case 'Capitalist':
                if ($request->currency == 'rub') {
                    $wallet = auth()->user()->capitalist_rub;
                } elseif ($request->currency == 'usd'){
                    $wallet = auth()->user()->capitalist_usd;
                }

                break;
            case 'USDT (TRC20)':
                $wallet = auth()->user()->usdt_trc20_address;

                break;
            case 'Банковская карта':
                $wallet = auth()->user()->debit_card.'/'.auth()->user()->bank_name;

                break;
        };

        $data = [
            'plan_date'      => date('Y-m-d', strtotime('+ 7 days')),
            'payment_system' => $request->payment_system,
            'wallet'         => $wallet,
            'currency'       => $request->currency,
            'payment_amount' => $request->payment_amount,
            'commission'     => $request->payment_amount * .03,
            'total_amount'   => $request->payment_amount * .97,
            'status'         => 'В обработке',
            'user_id'        => auth()->user()->id,
        ];

        Payout::query()->create($data);

        return redirect()->route('user.payouts.index');
    }
}
