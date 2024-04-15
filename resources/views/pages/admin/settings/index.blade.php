@extends('layouts.admin')
@section('Настройки') active @endsection

@section('content')
    <div class="row mb-3 justify-content-between">
        <div class="col">
            <h2>{{__('Настройки')}}</h2>
        </div>
    </div>

    <form class="row" method="post" action="{{route('admin.settings.save')}}">
        @csrf
        <div class="form-group">
            <label>{{__('Правила офферов')}}</label>
            <textarea class="form-control" name="offer_rules">@if($offer_rules!=null){{$offer_rules->text}}@endif</textarea>
        </div>
        <div class="form-group mt-4">
            <button type="submit" class="btn btn-primary">{{__('Сохранить')}}</button>
        </div>

    </form>
@endsection
