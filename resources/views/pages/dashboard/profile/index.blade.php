@php
    if(auth()->user()->is_admin) $extends = 'layouts.admin'; else $extends = 'layouts.user';
@endphp
@extends($extends)

@section('Профиль') active @endsection

@section('content')
    <div class="row mb-3">
        <div class="col-auto d-flex">
            <h2 class="fs-1 my-auto">{{__('Профиль')}}</h2>
        </div>
    </div>

    <div class="row">
        <form action="{{route('user.profile.update')}}" method="post" class="col-12 my-5">
            @csrf
            @method('patch')
            <div class="card border-0 shadow" style="border-radius: 5px">
                <div class="card-body p-5">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group mt-3">
                                <label>{{__('Логин')}}</label>
                                <input type="text" class="form-control fs-4 bg-light" name="name" value="{{auth()->user()->name}}" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group mt-3">
                                <label>{{__('Номер телефона')}}</label>
                                <input type="text" class="form-control fs-4 bg-light" name="phone" value="{{auth()->user()->phone}}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group mt-3">
                                <label>{{__('Email')}}</label>
                                <input type="email" class="form-control fs-4 bg-light" readonly value="{{auth()->user()->email}}">
                            </div>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-primary fs-4 form-control bg-primary">
                                {{__('Сохранить')}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="col-12 mt-5">
            <div class="card border-0 shadow" style="border-radius: 5px">
                <div class="card-body p-5">
                    <h2 class="fs-2 my-auto">{{__('Платежные реквизиты')}}</h2>

                    <livewire:PaymentMethods/>

                </div>
            </div>
        </div>

    </div>

@endsection
