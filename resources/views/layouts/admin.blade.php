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
                'link'=>route('admin.sources.index'),
                'title'=>'Уведомления',
                'icon'=>'far fa-bell'
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
                [
                'link'=>route('admin.blog.index'),
                'title'=>'Блог',
                'icon'=>'fas fa-bullhorn'
                ],
                [
                'link'=>route('admin.faq.index'),
                'title'=>'FAQ',
                'icon'=>'far fa-question-circle'
                ],
                [
                'link'=>route('admin.rules.index'),
                'title'=>'Правила',
                'icon'=>'fas fa-info'
                ],
                [
                'link'=>route('admin.tickets.index'),
                'title'=>'Тикеты',
                'icon'=>'fas fa-coins'
                ],
            ];
    @endphp
    @include('layouts.lk-blocks.sidebar')

@endsection
