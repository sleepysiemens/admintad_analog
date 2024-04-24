@extends('layouts.lk')
@section('sidebar')
    @php
        $navs=[
                [
                'link'=>route('admin.main.index'),
                'title'=>'Дашборд',
                'icon'=>'fas fa-tachometer-alt'
                ],
                [
                'link'=>'#',
                'title'=>'Профиль',
                'icon'=>'fas fa-user'
                ],
                [
                'link'=>route('admin.news.index'),
                'title'=>'Новости',
                'icon'=>'far fa-newspaper'
                ],
                [
                'link'=>route('admin.offers.index'),
                'title'=>'Офферы',
                'icon'=>'fas fa-paste'
                ],
                [
                'link'=>route('admin.offers.stats'),
                'title'=>'Статистика',
                'icon'=>'fas fa-chart-line'
                ],
                 [
                'link'=>route('admin.settings.index'),
                'title'=>'Настройки',
                'icon'=>'fas fa-cog'
                ],
            ];
    @endphp
    @include('layouts.lk-blocks.sidebar')

@endsection
