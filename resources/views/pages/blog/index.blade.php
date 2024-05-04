@extends('layouts.app')

@section('blog') active @endsection

@section('content')
    <div class="container">
        <div class="row mt-5">
            <a href="{{route('landing.index')}}">{{__('Назад')}}</a>
        </div>

        <livewire:BlogPosts/>
    </div>

@endsection
