@extends('layouts.admin')

@section('Офферы') active @endsection

@section('content')
    <div class="row border-bottom pb-3">
        <div class="col-6 row">
            <div class="col-auto d-flex">
                <a href="{{route('admin.offers.index')}}" class="text-decoration-none mt-auto mb-0"><i class="fas fa-arrow-left me-2"></i>{{__('Назад')}}</a>
            </div>
        </div>
        <div class="col-6 row justify-content-end">
            <div class="col-auto">
                <a href="{{route('admin.offers.edit', $offer->id)}}" class="btn btn-primary">{{__('редактировать')}} <i class="far fa-edit ms-1 "></i></a>
            </div>
            <div class="col-auto">
                <form method="post" action="{{route('admin.offers.delete', $offer->id)}}">
                    @csrf
                    @method('delete')
                    <button class="btn btn-warning">{{__('удалить')}} <i class="far fa-trash-alt ms-1"></i></button>
                </form>
            </div>
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

    <div class="row mt-3">
        <div class="col-md-12">
                <div class="card shadow overflow-hidden border-0 position-relative mt-5" style="border-radius: 15px">
                    <div class="card-body w-100">
                        <p class="my-auto mx-2">{{$offer->link}}</p>
                    </div>
                </div>
        </div>
    </div>
@endsection
