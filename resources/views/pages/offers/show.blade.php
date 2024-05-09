@extends('layouts.app')

@section('offers') active @endsection

@section('content')
    <div class="container mb-5">
        <div class="row mt-5">
            <a href="{{route('offer.index')}}">{{__('Назад')}}</a>
        </div>

        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card shadow overflow-hidden border-0 position-relative" style="border-radius: 15px">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="card-body p-5">
                                <img class="img-fluid" style="height: 220px; width: 220px; object-fit: cover; object-position: top left;" src="{{ $offer->image }}">
                                <!-- Отображение цены -->
                                <p>{{__('Отчисления')}}: <span id="price_display">{{ $offer->price }}</span></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="rounded p-3" style="background-color: white;">
                                    <h1 class="text-left" style="font-size: 24px; font-weight: bold; color: black;">{{__('Описание оффера')}}</h1>
                                    <p style="font-size: 16px; color: black;">{!! $offer->description !!}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card shadow overflow-hidden border-0 position-relative" style="border-radius: 15px">
                    <div class="card-body p-5">
                        <h1 class="text-left" style="font-size: 24px; font-weight: bold; color: black;">{{__('Правила оффера')}}</h1>
                        <div class="text-black fs-4">
                            @if($offer_rules!=null)
                                {!! $offer_rules->text !!}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            {{--
            <div class="col-4">
                <div class="card h-100 shadow overflow-hidden border-0 mt-4" style="border-radius: 15px">
                    <div class="card-body p-5">
                        <h1 style="font-size: 24px; font-weight: bold; color: black;">{{__('Источники трафика')}}</h1>
                        @if($traffic_sources!=null)
                            <ul>
                                @foreach(explode("\n", $traffic_sources->text) as $line)
                                    <li class="check-li">
                                        <p class="fs-4">{{ $line }}</p>
                                    </li>
                                @endforeach
                            </ul>

                        @endif
                    </div>
                </div>
            </div>
            --}}
            <div class="col-6">
                <div class="card h-100 shadow overflow-hidden border-0 mt-4" style="border-radius: 15px">
                    <div class="card-body p-5">
                        <h1 style="font-size: 24px; font-weight: bold; color: black;">{{__('Разрешенные источники')}}</h1>
                        @if($traffic_sources!=null)
                            <ul>
                                @foreach(explode("\n", $offer->allowed_sources) as $line)
                                    <li class="check-li">
                                        <p class="fs-4">{{ $line }}</p>
                                    </li>
                                @endforeach
                            </ul>

                        @endif
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card h-100 shadow overflow-hidden border-0 mt-4" style="border-radius: 15px">
                    <div class="card-body p-5">
                        <h1 style="font-size: 24px; font-weight: bold; color: black;">{{__('Запрещенные источники')}}</h1>
                        @if($traffic_sources!=null)
                            <ul>
                                @foreach(explode("\n", $offer->prohibited_sources) as $line)
                                    <li class="check-li">
                                        <p class="fs-4">{{ $line }}</p>
                                    </li>
                                @endforeach
                            </ul>

                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card shadow overflow-hidden border-0 position-relative" style="border-radius: 15px">
                    <div class="card-body px-4 fs-4">
                        <a href="{{route('login')}}">Войдите</a> чтобы получить ссылку
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
