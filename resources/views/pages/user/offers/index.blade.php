@extends('layouts.user')

@section('Офферы') active @endsection

@section('content')
    <div class="row mb-3 justify-content-between">
        <div class="col">
            <h2>{{__('Офферы')}}</h2>
        </div>
    </div>

    <div class="row">
        @foreach($offers as $offer)
            <div class="col-4">
                <div class="card shadow overflow-hidden border-0 position-relative" style="border-radius: 12px;">
                    <span class="position-absolute text-uppercase px-1" style="right: 0; border-bottom-left-radius: 12px; font-size: 14px; padding: 5px; line-height: 12px; background-color: #FF4500; color: white;">
                        <span style="font-weight: bold; font-size: 10px;">{{__('exclusive')}}</span>
                    </span>
                    <div class="card-body bg-white">
                        <div class="row">
                            <div class="col-4">
                                <img class="w-100" style="height: 160px; object-fit: cover;" src="{{$offer->image}}">
                            </div>
                            <div class="col-8">
                                <h4 style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;" class="text-black">{{$offer->title}}</h4>

                                <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                    {!! $offer->description !!}
                                </p>
                                <div class="row justify-content-between">
                                    <p class="col-6 my-auto">ID: {{$offer->id}}</p>
                                    <div class="col-6">
                                        <a href="{{ route('user.offers.show', $offer->id) }}" class="btn btn-sm btn-custom fs-5">
                                            {{__('Подробнее')}}
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row border-top mx-2 mt-3">
                            <div class="col-4">
                                <p class="m-0">{{__('Страна')}}</p>
                                <p class="text-black m-0">{{$offer->country}}</p>
                            </div>
                            <div class="col-4">
                                <p class="m-0">{{__('Стоимость')}}</p>
                                <p class="text-black m-0">{{$offer->cost}}</p>

                            </div>
                            <div class="col-4">
                                <p class="m-0">{{__('Отчисления')}}</p>
                                <p class="text-black m-0" style="font-weight: 500">{{$offer->price}} ₽</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <style>
        .btn-custom {
            background-color: white;
            color: #1E90FF;
            border-color: #1E90FF;
            transition: background-color 0.3s, color 0.3s;
        }
        .btn-custom:hover {
            background-color: #1E90FF !important;
            color: white !important;
        }
        /* Add style for spans within paragraphs */
        .card-body p span {
            display: inline-block; /* Display spans inline */
            margin-left: 5px; /* Add margin between description and value */
        }
    </style>
@endsection
