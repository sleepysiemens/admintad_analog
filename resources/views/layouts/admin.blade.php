@extends('layouts.lk')
@section('sidebar')
    @php
        $navs=[
                [
                'link'=>'#',
                'title'=>'Профиль',
                'icon'=>'fas fa-user'
                ],
                [
                'link'=>'#',
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
                [
                'link'=>route('logout.get'),
                'title'=>'Выйти',
                'icon'=>'fas fa-sign-out-alt'
                ],
            ];
    @endphp
    @include('layouts.lk-blocks.sidebar')

@endsection
