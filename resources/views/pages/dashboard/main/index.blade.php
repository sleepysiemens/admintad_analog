@php
if(auth()->user()->is_admin) $extends = 'layouts.admin'; else $extends = 'layouts.user';
@endphp
@extends($extends)

@section('Дашборд') active @endsection

@section('content')
    <div class="row mb-3">
        <div class="col-auto d-flex">
            <h2 class="fs-1 my-auto">{{__('Дашборд')}}</h2>
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
    <livewire:recomended-blog-posts/>
    </div>

@endsection
