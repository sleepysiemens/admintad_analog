@extends('layouts.user')
@section('Статистика') active @endsection

@section('content')
    <div class="row mb-3 justify-content-between">
        <div class="col">
            <h2>{{__('Статистика')}}</h2>
        </div>
    </div>
<div style="border-radius: 10px" class="overflow-hidden border">
    <table class="table bg-white" >
        <thead class="bg-light-blue">
        <tr>
            <th colspan="4" class="border-end">{{__('Трафик')}}</th>
            <th colspan="3" class="border-end">{{__('Показатели')}}</th>
            <th colspan="6" class="border-end">{{__('Конверсии')}}</th>
            <th colspan="3">{{__('Финансы')}}</th>
        </tr>
        </thead>
        <tbody>
        <tr class="">
            <th class="border-end">{{__('Дата')}}</th>
            <th class="border-end">{{__('Хосты')}}</th>
            <th class="border-end">{{__('Хиты')}}</th>
            <th class="border-end">{{__('ТБ')}}</th>
            <th class="border-end">{{__('Unuque CR (%)')}}</th>
            <th class="border-end">{{__('CR (%)')}}</th>
            <th class="border-end">{{__('Апрув (%)')}}</th>
            <th class="border-end">{{__('Всего')}}</th>
            <th class="border-end">{{__('Принято')}}</th>
            <th class="border-end">{{__('Ожидает')}}</th>
            <th class="border-end">{{__('Холд')}}</th>
            <th class="border-end">{{__('Отменено')}}</th>
            <th class="border-end">{{__('Треш')}}</th>
            <th class="border-end">{{__('₽')}}</th>
            <th class="border-end">{{__('$')}}</th>
            <th class="">{{__('€')}}</th>
        </tr>
        @foreach($offers as $offer)
            <tr>
                <td class="border-end">{{$offer->updated_at}}</td>
                <td class="border-end">{{$offer->hosts_count}}</td>
                <td class="border-end">{{$offer->clicks}}</td>
                <td class="border-end">{{$offer->tb}}</td>
                <td class="border-end">{{$offer->unique_cr}}</td>
                <td class="border-end">{{$offer->cr}}</td>
                <td class="border-end">{{$offer->approve}}</td>
                <td class="border-end">{{$offer->total}}</td>
                <td class="border-end">{{$offer->accepted}}</td>
                <td class="border-end">{{$offer->waiting}}</td>
                <td class="border-end">{{$offer->hold}}</td>
                <td class="border-end">{{$offer->canceled}}</td>
                <td class="border-end">{{$offer->trash}}</td>
                <td class="border-end">{{$offer->rub}}</td>
                <td class="border-end">{{$offer->usd}}</td>
                <td class="">{{$offer->eur}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>

@endsection
