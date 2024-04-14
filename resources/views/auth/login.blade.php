@extends('layouts.app')

@section('content')
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-6 d-none d-md-block">
                    <img src="{{asset('img/glob.png')}}" class="svg-shadow animated-image" style="max-width: 70%; height: auto;">
                </div>
                <div class="col-md-6 col-12">
                    <div class="">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3 justify-content-center">
                                <div class="col-10">
                                    <input id="email" type="email" class="form-control bg-transparent text-white @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('Email') }}">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                                <div class="col-10">
                                    <input id="password" type="password" class="form-control bg-transparent text-white @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Пароль') }}">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                                <div class="col-10 row">
                                    <div class="form-check d-flex col-6">
                                        <input class="form-check-input my-auto" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label text-white ms-1" for="remember">
                                            {{ __('Запомнить меня') }}
                                        </label>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a class="btn-link text-white text-decoration-none col-6 text-end" href="{{ route('password.request') }}">
                                            {{ __('Забыли пароль?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-0 justify-content-center">
                                <div class="col-10">
                                    <button type="submit" class="btn btn-primary px-5 rounded-3">
                                        {{ __('Войти') }}
                                    </button>
                                </div>
                            </div>

                            <div class="row mb-0 justify-content-center mt-3">
                                <div class="col-10 d-flex">
                                    <p class="text-white">{{__('Еще нет аккаунта? ')}}</p>
                                    <a class="btn-link text-decoration-none ms-1 text-white-50" href="{{ route('register') }}">
                                        {{ __('Зарегистрироваться') }}
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
