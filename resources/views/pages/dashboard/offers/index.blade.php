@php
    if(auth()->user()->is_admin) $extends = 'layouts.admin'; else $extends = 'layouts.user';
@endphp
@extends($extends)

@section('Офферы') active @endsection

@section('content')

    <livewire:offers-list/>

@endsection
