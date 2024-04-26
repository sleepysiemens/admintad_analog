@extends('layouts.user')
@section('Офферы') active @endsection

@section('content')
    <a href="{{ route('user.offers.index') }}">{{ __('Назад') }}</a>
    <div class="row mb-3 justify-content-between">
        <div class="col">
            <h1 style="font-size: 24px; font-weight: bold; color: black;">{{ $offer->title }}</h1>
        </div>
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

        <div class="col-4">
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

        <div class="col-4">
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

    <div class="row mt-3">
        <div class="col-md-12">
                @if(!$has_offer)
                    <a class="btn btn-primary bg-primary w-100 fs-4" href="{{route('user.offers.get_link', $offer->id)}}">{{__('Получить ссылку')}}</a>
                @else
                <div class="card shadow overflow-hidden border-0 position-relative" style="border-radius: 15px">
                    <div class="card-body w-100">
                        <p class="my-auto mx-2">{{route('redirector',$personal_link)}}</p>
                    </div>
                </div>
                @endif
        </div>
    </div>
@endsection
