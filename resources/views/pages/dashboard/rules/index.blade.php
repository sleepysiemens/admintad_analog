@php
    if(auth()->user()->is_admin) $extends = 'layouts.admin'; else $extends = 'layouts.user';
@endphp
@extends($extends)

@section('Правила') active @endsection

@section('content')
    <div class="row mb-3">
        <div class="col-auto d-flex">
            <h2 class="fs-1 my-auto">{{__('Правила')}}</h2>
        </div>
    </div>

@endsection
