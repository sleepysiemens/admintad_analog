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
                'link'=>route('user.offers.index'),
                'title'=>'Офферы',
                'icon'=>'fas fa-paste'
                ],
                [
                'link'=>route('user.stat.index'),
                'title'=>'Статистика',
                'icon'=>'fas fa-chart-line'
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
