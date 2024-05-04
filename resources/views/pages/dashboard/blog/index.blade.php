@php
    if(auth()->user()->is_admin) $extends = 'layouts.admin'; else $extends = 'layouts.user';
@endphp
@extends($extends)

@section('Блог') active @endsection

@section('content')

    <div class="row mb-3 justify-content-between">
        <div class="col-auto d-flex">
            <h2 class="fs-1 my-auto">{{__('Блог')}}</h2>
        </div>

        <div class="col d-flex">
            @if(auth()->user()->is_admin)
                <a href="{{route('admin.blog.create')}}" class="btn btn-primary bg-primary my-auto fs-3">{{__('Новый пост')}}</a>
            @endif
        </div>
    </div>

    <div class="row">
        <livewire:BlogPosts/>
    </div>

@endsection
