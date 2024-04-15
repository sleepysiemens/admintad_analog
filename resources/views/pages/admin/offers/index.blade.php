@extends('layouts.admin')
@section('Офферы') active @endsection

@section('content')
    <div class="row mb-3 justify-content-between">
        <div class="col">
            <h2>{{__('Офферы')}}</h2>
        </div>
        <div class="col-2">
            <a class="btn btn-primary" href="{{route('admin.offers.create')}}">
                {{__('Добавить оффер')}}
            </a>
        </div>
    </div>

    <div class="row">

        @foreach($offers as $offer)
            <div class="col-4">
                <div class="card shadow overflow-hidden border-0 position-relative" style="border-radius: 25px">
                    <span class="position-absolute text-uppercase bg-warning px-4" style="right: 0; border-bottom-left-radius: 25px">{{__('exclusive')}}</span>
                    <div class="card-body bg-white">
                        <div class="row">
                            <div class="col-4">
                                <img class="w-100" style="height: 200px; object-fit: cover" src="{{$offer->image}}">
                            </div>
                            <div class="col-8 py-2">
                                <h4 class="text-black">{{$offer->title}}</h4>
                                <p style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;">
                                    {{$offer->description}}
                                </p>
                                <div class="row justify-content-between">
                                    <p class="col-auto my-auto">ID: {{$offer->id}}</p>
                                    <div class="col-auto">
                                        <a href="{{route('admin.offers.show',$offer->id)}}" class="btn">{{__('Подробнее')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
