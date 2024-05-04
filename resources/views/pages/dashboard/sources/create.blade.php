@php
    if(auth()->user()->is_admin) $extends = 'layouts.admin'; else $extends = 'layouts.user';
@endphp
@extends($extends)

@section('Источники') active @endsection

@section('content')
    <a href="{{route('user.sources.index')}}">{{__('Назад')}}</a>
    <div class="row my-3 justify-content-start">
        <div class="col-auto d-flex">
            <h2 class="fs-1 my-auto">{{__('Добавить источник')}}</h2>
        </div>
    </div>
    <form method="post" action="{{route('user.sources.store')}}">
        @method('put')
        @csrf
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
                    <div class="form-group mt-3">
                        <label>{{__('Название источника')}}</label>
                        <input type="text" class="form-control fs-4" name="title" required/>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group mt-3">
                        <label>{{__('Ссылка на источник')}}</label>
                        <input type="text" class="form-control fs-4" name="link" required/>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group mt-3">
                        <label>{{__('Описание источника')}}</label>
                        <textarea type="text" class="form-control fs-4" name="description" required rows="5"></textarea>
                    </div>
                </div>

                <div class="col-6 d-flex mt-4">
                    <div class="form-group mt-auto mb-4 w-100">
                        <button type="submit" class="btn btn-primary bg-primary py-4 w-100 fs-4  mt-0">{{__('Добавить')}}</button>
                    </div>
                </div>
            </div>

        </div>
    </form>


@endsection
