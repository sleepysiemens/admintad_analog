@php
    if(auth()->user()->is_admin) $extends = 'layouts.admin'; else $extends = 'layouts.user';
@endphp
@extends($extends)

@section('Источники') active @endsection
@section('Уведомления') active @endsection

@section('content')
    <div class="row mb-3 justify-content-between">
        <div class="col-auto d-flex">
            <h2 class="fs-1 my-auto">{{__('Источники')}}</h2>
        </div>

        <div class="col d-flex">
            @if(!auth()->user()->is_admin)
                <a href="{{route('user.sources.create')}}" class="btn btn-primary bg-primary my-auto fs-3">{{__('Добавить источник')}}</a>
            @else
                <a href="{{route('admin.sources.auto')}}" class=" my-auto fs-3 ms-4">{{__('Автопринятие')}}</a>
            @endif
        </div>
    </div>

    <livewire:SourcesList/>

@endsection
