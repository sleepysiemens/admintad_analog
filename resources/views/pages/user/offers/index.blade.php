@extends('layouts.user')

@section('Офферы', 'active')

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
                        <h4 style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;" class="text-black">{{$offer->title}}</h4>
                        <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">
                            {{$offer->description}}
                            <p style="margin: 5px 0; border-top: 0.5px solid #DCDCDC;"></p>
                        </p>
                        <div class="row">
                            <div class="col-4">
                                <img class="w-100" style="height: 200px; object-fit: cover;" src="{{$offer->image}}">
                            </div>
                            <div class="col-8">
                            <p style="margin: 40px 0 0; margin-left: 40px;">
    <span style="font-weight: bold;">{{__('Отчисления')}}:</span> 
    <span style="font-weight: bold; color: black;">{{ $offer->price }}</span>
</p>
<p style="margin: 0 0; margin-left: 40px;">
    <span style="font-weight: bold;">{{__('Стоимость')}}:</span> 
    <span style="font-weight: bold; color: black;">{{ $offer->cost }}</span>
</p>
<p style="margin: 0 0; margin-left: 40px;">
    <span style="font-weight: bold;">{{__('Страна')}}:</span> 
    <span style="font-weight: bold; color: black;">{{ $offer->country }}</span>
</p>




                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row justify-content-between">
                            <p class="col-auto my-auto">ID: {{$offer->id}}</p>
                            <div class="col-auto">
                                <a href="{{ route('user.offers.show', $offer->id) }}" class="btn btn-sm btn-custom" style="padding: 0.40rem 0.8rem; font-size: 0.75rem; background-color: white; color: #1E90FF; border-color: #1E90FF;">
                                    {{__('Подробнее')}}
                                </a>
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
