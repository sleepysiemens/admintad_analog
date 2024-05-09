@extends('layouts.app')

@section('offers') active @endsection

@section('content')
    <div class="container">
        <div class="row mt-5">
            <a href="{{route('landing.index')}}">{{__('Назад')}}</a>
        </div>

        <livewire:offers-list/>
    </div>

@endsection
