@extends('layouts.admin')
@section('Статистика') active @endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('Title')}}</th>
                    <th scope="col">{{__('Клики')}}</th>
                    <th scope="col">{{__('Ссылка')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($offers as $offer)
                    <tr>
                        <th scope="row">{{$offer->id}}</th>
                        <td>{{$offer->title}}</td>
                        <td>{{$offer->clicks}}</td>
                        <td>{{route('redirector',$offer->link)}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
