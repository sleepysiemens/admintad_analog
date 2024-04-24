@extends('layouts.user')
@section('Дашборд') active @endsection

@section('content')
    <div class="row mb-3 justify-content-between">
        <div class="col">
            <h2>{{__('Дашборд')}}</h2>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-6">

            <div class="card border-0 shadow product-section p-0" style="border-radius: 10px">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-6 px-4 border-end text-white position-relative overflow-hidden">
                            <p class="fs-3 opacity-75">{{__('Лидов за сегодня')}}</p>
                            <h1 class="">0</h1>
                            <div class="position-absolute d-flex opacity-25" style="top:0; bottom:0; right: 15%">
                                <i class="fas fa-user-check fa-4x m-auto"></i>
                            </div>
                        </div>
                        <div class="col-6 px-4 text-white  position-relative overflow-hidden">
                            <p class="fs-4 opacity-75">{{__('Заработано сегодня')}}</p>
                            <h1>0 ₽</h1>
                             <div class="position-absolute d-flex opacity-25" style="top:0; bottom:0; right: 15%">
                                 <i class="fas fa-hand-holding-usd fa-4x m-auto"></i>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
            <livewire:DashboardNews/>
        </div>

        {{--SECOND HALF--}}

        <div class="col-6">

            <div class="card border-0 shadow product-section p-0" style="border-radius: 10px">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-6 px-4 border-end text-white position-relative overflow-hidden">
                            <p class="fs-3 opacity-75">{{__('Лидов за вчера')}}</p>
                            <h1 class="">0</h1>
                            <div class="position-absolute d-flex opacity-25" style="top:0; bottom:0; right: 15%">
                                <i class="fas fa-user-check fa-4x m-auto"></i>
                            </div>
                        </div>
                        <div class="col-6 px-4 text-white  position-relative overflow-hidden">
                            <p class="fs-4 opacity-75">{{__('Заработано вчера')}}</p>
                            <h1>0 ₽</h1>
                            <div class="position-absolute d-flex opacity-25" style="top:0; bottom:0; right: 15%">
                                <i class="fas fa-hand-holding-usd fa-4x m-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <livewire:DashboardOffers/>
        </div>

    </div>
    {{--НОВОСТИ--}}
    <div class="row mt-5">
        <h2>{{__('Последние новости')}}</h2>

        <div class="row mt-4">
            @foreach([1,2,3] as $news)
                <a href="#" class="col-4 text-decoration-none">
                    <div class="card border-0 shadow" style="border-radius: 15px">
                        <div class="card-body p-4">
                            <div>
                                <img class="w-100" style="height: 200px; object-fit: cover; border-radius: 10px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQw4UeEjjERyEVTOIaXIKHlj7snPZAKulH5-z1Kau1lsw&s">
                            </div>
                            <h3 class="fw-bold mt-3 news-text">Заголовок</h3>
                            <div class="row opacity-50 mt-3">
                                <p class="col-4 m-0">21.09.2023</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="row justify-content-center mt-5 fs-3">
            <a href="#" class="col-auto m-auto d-flex text-center text-decoration-none">
                <p class="my-auto">{{__('Смотреть все')}}</p>
                <i class="fa-solid fa-arrow-right ms-2 my-auto"></i>
            </a>
        </div>
    </div>

@endsection
