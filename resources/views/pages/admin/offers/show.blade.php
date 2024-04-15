@extends('layouts.admin')
@section('Офферы') active @endsection

@section('content')

    <div class="row border-bottom pb-3">
        <div class="col-6 row">
            <div class="col-auto d-flex">
                <a href="{{route('admin.offers.index')}}" class="text-decoration-none my-auto"><i class="fas fa-arrow-left me-2"></i>{{__('Назад')}}</a>
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
            <div class="card">
                <p class="my-auto mx-2">{{$offer->link}}</p>
            </div>
        </div>
    </div>

@endsection
