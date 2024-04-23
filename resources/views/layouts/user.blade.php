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
                'link'=>'#',
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
                'link'=>route('user.stat.index'),
                'title'=>'Статистика',
                'icon'=>'fas fa-chart-line'
                ],
            ];
    @endphp

    @include('layouts.lk-blocks.sidebar')

@endsection
