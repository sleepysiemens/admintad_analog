@php
    if(auth()->user()->is_admin) $extends = 'layouts.admin'; else $extends = 'layouts.user';
@endphp
@extends($extends)

@section('Источники') active @endsection
@section('Уведомления') active @endsection

@section('content')
    <div class="row mb-3 justify-content-between">
        <div class="col-auto d-flex">
            <h2 class="fs-1 my-auto">{{__('Автопринятие источников')}}</h2>
        </div>

        <div class="col d-flex">
            @if(!auth()->user()->is_admin)
                <a href="{{route('user.sources.create')}}" class="btn btn-primary bg-primary my-auto fs-3">{{__('Добавить источник')}}</a>
            @else
                <a href="{{route('admin.sources.index')}}" class=" my-auto fs-3 ms-4">{{__('Назад')}}</a>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-12 card border-0 bg-opacity-25 bg-primary text-black" style="border-radius: 15px">
            <div class="card-body">
                <p>
                    Источники, указанные здесь будут приниматься автоматически. Необходимо указывать домашнюю страницу ресурса, на котором будет происходить продвижение. К примеру https://youtube.com будет автоматически принимать все источники, ссылки которых начинаются с https://youtube.com
                </p>
            </div>
        </div>
        <form method="post" action="{{route('admin.sources.store')}}">
            @csrf
            @method('put')
            <div class="row overflow-hidden border mt-5" style="border-radius: 10px">
                <div class="form-group col-10 m-0 p-0">
                    <input type="url" class="form-control rounded-0 border-0 fs-5" name="url" placeholder="https://..." required>
                </div>
                <button type="submit" class="btn btn-primary fs-5 col-2 rounded-0 border-0">Добавить</button>
            </div>
        </form>

        <div class="row overflow-hidden border mt-3 p-0 mx-auto" style="border-radius: 10px">
            @foreach($sources as $source)
                <div class="form-group col-10 m-0 p-0">
                    <input type="url" class="form-control rounded-0 border-0 fs-5" value="{{$source->url}}" readonly>
                </div>
                <a href="{{route('admin.sources.delete', $source->id)}}" type="submit" class="btn btn-warning fs-5 col-2 rounded-0 border-0"><i class="far fa-trash-alt"></i></a>
            @endforeach
        </div>

    </div>



@endsection
