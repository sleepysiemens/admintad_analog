@extends('layouts.lk')
@section('sidebar')
    @php
            $navs=[
                [
                'link'=>route('user.main.index'),
                'title'=>'Дашборд',
                'icon'=>'fas fa-tachometer-alt'
                ],
                [
                'link'=>route('user.profile.index'),
                'title'=>'Профиль',
                'icon'=>'fas fa-user'
                ],
                [
                'link'=>route('user.news.index'),
                'title'=>'Новости',
                'icon'=>'far fa-newspaper'
                ],
                [
                'link'=>route('user.offers.index'),
                'title'=>'Офферы',
                'icon'=>'fas fa-paste'
                ],
                [
                'link'=>route('user.sources.index'),
                'title'=>'Источники',
                'icon'=>'fas fa-network-wired'
                ],
                [
                'link'=>route('user.stat.index'),
                'title'=>'Статистика',
                'icon'=>'fas fa-chart-line'
                ],
                 [
                'link'=>route('user.payouts.index'),
                'title'=>'Выплаты',
                'icon'=>'fas fa-wallet'
                ],
                [
                'link'=>route('user.faq.index'),
                'title'=>'FAQ',
                'icon'=>'far fa-question-circle'
                ],
                [
                'link'=>route('user.rules.index'),
                'title'=>'Правила',
                'icon'=>'fas fa-info'
                ],
            ];
    @endphp

    @include('layouts.lk-blocks.sidebar')

@endsection
