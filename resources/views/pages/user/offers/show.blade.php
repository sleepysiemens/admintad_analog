@extends('layouts.user')

@section('content')

    <div class="row border-bottom pb-3">
        <div class="col-6 row">
            <div class="col-auto d-flex">
                <a href="{{route('user.offers.index')}}" class="text-decoration-none my-auto"><i class="fas fa-arrow-left me-2"></i>{{__('Назад')}}</a>
            </div>
        </div>
    </div>

    <div class="row mt-5 rounded">
        <div class="col-5">
            <img class="w-100 col" style="height: 500px; object-fit: cover; border-radius: 25px" src="{{$offer->image}}">
        </div>
        <div class="col-7">
            <h4 class="mb-4">
                {{$offer->title}}
            </h4>
            <p>
                {{$offer->description}}
            </p>
            <h5 class="mb-4">
                {{__('Правила офферов')}}
            </h5>
            <p>
                {{$offer_rules->text}}
            </p>
            @if(!$has_offer)
                <a class="btn btn-primary" href="{{route('user.offers.get_link', $offer->id)}}">{{__('Получить ссылку')}}</a>
            @else
                <div class="card w-100">
                    <p class="my-auto mx-2">{{route('redirector',$personal_link)}}</p>
                </div>
            @endif
        </div>
    </div>

@endsection



