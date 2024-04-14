@extends('layouts.landing')

@section('content')
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-6 d-none d-md-block">
                    <img src="{{asset('img/glob.png')}}" class="svg-shadow animated-image" style="max-width: 70%; height: auto;">
                </div>
                <div class="col-md-6 col-12">
                    <div class="">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3 justify-content-center">
                                <div class="col-10">
                                    <input id="name" type="text" class="form-control bg-transparent text-white @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{__('Имя')}}">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                                <div class="col-10">
                                    <input id="email" type="email" class="form-control bg-transparent text-white @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{__('Email')}}">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                                <div class="col-10">
                                    <input id="password" type="password" class="form-control bg-transparent text-white @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  placeholder="{{__('Пароль')}}">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                                <div class="col-10">
                                    <input id="password-confirm" type="password" class="form-control bg-transparent text-white" name="password_confirmation" required autocomplete="new-password" placeholder="{{__('Подтверждение пароля')}}">
                                </div>
                            </div>


                            <div class="row mb-0 justify-content-center">
                                <div class="col-10 d-flex">
                                    <button type="submit" class="btn btn-primary px-5 rounded-3">
                                        {{ __('Зарегистрироваться') }}
                                    </button>

                                    <a class="btn-link text-decoration-none m-auto text-white-50" href="{{ route('login') }}">
                                        {{ __('Вход') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        input::placeholder
        {
            color: #fff !important;
        }
    </style>
@endsection
