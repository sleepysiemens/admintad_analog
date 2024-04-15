@extends('layouts.admin')
@section('Офферы') active @endsection

@section('content')
    <a href="{{route('admin.offers.index')}}">{{__('Назад')}}</a>
    <form method="post" action="{{route('admin.offers.store')}}" class="card">
        @csrf
        <div class="card-body">
            <div class="container">
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="title" placeholder="{{__('Заголовок')}}" required>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="image" placeholder="{{__('Ссылка на обложку')}}">
                </div>
                <div class="form-group mt-3">
                    <textarea placeholder="{{__('Описание')}}" name="description" class="form-control" required></textarea>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="link" placeholder="{{__('Ссылка')}}" required>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group mt-3">
                            <input type="number" class="form-control" name="price" placeholder="{{__('Цена')}}" required>
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
