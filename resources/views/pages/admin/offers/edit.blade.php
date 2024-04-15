@extends('layouts.admin')
@section('Офферы') active @endsection

@section('content')
    <a href="{{route('admin.offers.index')}}">{{__('Назад')}}</a>
    <form method="post" action="{{route('admin.offers.update', $offer->id)}}" class="card">
        @csrf
        @method('patch')
        <div class="card-body">
            <div class="container">
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="title" placeholder="{{__('Заголовок')}}" value="{{$offer->title}}" required>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="image" placeholder="{{__('Ссылка на обложку')}}" value="{{$offer->image}}">
                </div>
                <div class="form-group mt-3">
                    <textarea placeholder="{{__('Описание')}}" name="description" class="form-control" required>{{$offer->description}}</textarea>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="link" placeholder="{{__('Ссылка')}}" value="{{$offer->link}}" required>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group mt-3">
                            <input type="number" class="form-control" name="price" placeholder="{{__('Цена')}}" value="{{$offer->price}}" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
