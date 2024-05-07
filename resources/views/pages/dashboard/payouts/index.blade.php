@php
    if(auth()->user()->is_admin) $extends = 'layouts.admin'; else $extends = 'layouts.user';
@endphp
@extends($extends)

@section('Выплаты') active @endsection

<livewire:PaymentOverlay lazy/>

@section('content')

    <div class="row mb-3">
        <div class="col-auto d-flex">
            <h2 class="fs-1 my-auto">{{__('Выплаты')}}</h2>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12 my-2">
            <div class="card bg-light-green border-green" style="border-radius: 10px">
                <div class="card-body row justify-content-between">
                    <div class="col-auto d-flex">
                        <i class="fas fa-info-circle fa-3x text-green my-auto" aria-hidden="true"></i>
                    </div>

                    <ul class="col-3">
                        <li>
                            Минимальная сумма выплаты составляет 3000 рублей, 50 долларов или 500 USDT.
                        </li>
                    </ul>
                    <ul class="col-3">
                        <li>
                            Выплата производятся через 7 дней с момента заказа.
                        </li>
                    </ul>
                    <ul class="col-3">
                        <li>
                            При заказе RUB или USD реквизиты (курс будет посчитан на момент выплаты).
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5 justify-content-center">

        <div class="col-4">
            <div class="card shadow border-0" style="border-radius: 15px">
                <div class="card-body p-4 position-relative">
                    <div class="row border-bottom pb-4">
                        <div class="col-6">
                            <div style="width: 75px; height: 75px" class="rounded-circle bg-light-blue d-flex">
                                <i class="fas fa-dollar-sign fa-3x m-auto"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <p class="text-end">{{__('Доллары США')}}</p>
                            <h1 class="text-end text-bold">@if(auth()->user()->usd != null) {{auth()->user()->usd}} @else 0.00 @endif</h1>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 pt-2 mt-2 px-0 d-flex justify-content-between">
                            <p class="ps-2 m-0" style="border-left: #1c7430 3px solid">{{__('Доступно')}}</p>
                            <p class="pe-2 m-0 text-bold">{{auth()->user()->usd - $usd_hold}}</p>
                        </div>
                        <div class="col-12 pt-2 mt-2 px-0 d-flex justify-content-between">
                            <p class="ps-2 m-0" style="border-left: #9f1447 3px solid">{{__('Холд')}}</p>
                            <p class="pe-2 m-0 text-bold">{{$usd_hold}}</p>
                        </div>
                    </div>
                    <livewire:CreatePayment currency="usd" remain="{{auth()->user()->usd - $usd_hold}}"/>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card shadow border-0" style="border-radius: 15px">
                <div class="card-body p-4 position-relative">
                    <div class="row border-bottom pb-4">
                        <div class="col-6">
                            <div style="width: 75px; height: 75px" class="rounded-circle bg-light-blue d-flex">
                                <i class="fas fa-ruble-sign fa-3x m-auto"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <p class="text-end">{{__('Рубли')}}</p>
                            <h1 class="text-end text-bold">@if(auth()->user()->rub != null) {{auth()->user()->rub}} @else 0.00 @endif</h1>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 pt-2 mt-2 px-0 d-flex justify-content-between">
                            <p class="ps-2 m-0" style="border-left: #1c7430 3px solid">{{__('Доступно')}}</p>
                            <p class="pe-2 m-0 text-bold">{{auth()->user()->rub - $rub_hold}}</p>
                        </div>
                        <div class="col-12 pt-2 mt-2 px-0 d-flex justify-content-between">
                            <p class="ps-2 m-0" style="border-left: #9f1447 3px solid">{{__('Холд')}}</p>
                            <p class="pe-2 m-0 text-bold">{{$rub_hold}}</p>
                        </div>
                    </div>
                    <livewire:CreatePayment currency="rub" remain="{{auth()->user()->rub - $rub_hold}}"/>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5 pt-5">
        <div class="col-12">
            <table class="table bg-white shadow overflow-hidden" style="border-radius: 15px">
                <thead class="bg-light-blue">
                <tr>
                    <th class="border-end">{{__('ID')}}</th>
                    <th class="border-end">{{__('Дата')}}</th>
                    <th class="border-end">{{__('Плановая дата')}}</th>
                    <th class="border-end">{{__('Платежная система')}}</th>
                    <th class="border-end">{{__('Кошелек')}}</th>
                    <th class="border-end">{{__('Валюта')}}</th>
                    <th class="border-end">{{__('Сумма выплаты')}}</th>
                    <th class="border-end">{{__('Комиссия')}}</th>
                    <th class="border-end">{{__('Сумма')}}</th>
                    <th class="">{{__('Статус')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($payouts as $payout)
                    <tr>
                        <td class="border-end">{{$payout->id}}</td>
                        <td class="border-end">{{$payout->created_at}}</td>
                        <td class="border-end">{{$payout->plan_date}}</td>
                        <td class="border-end">{{$payout->payment_system}}</td>
                        <td class="border-end">{{$payout->wallet}}</td>
                        <td class="border-end">{{$payout->currency}}</td>
                        <td class="border-end">{{$payout->payment_amount}}</td>
                        <td class="border-end">{{$payout->commission}}</td>
                        <td class="border-end">{{$payout->total_amount}}</td>
                        <td class="border-end">{{$payout->status}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

