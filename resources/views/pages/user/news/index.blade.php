@extends('layouts.user')

@section('Новости') active @endsection

@section('content')

    <div class="row mb-3 justify-content-between">
        <div class="col">
            <h2>{{__('Новости')}}</h2>
        </div>
    </div>
@foreach($news as $post)
    @if(!isset($last_date) or date("m-d",strtotime($post->created_at))!=date("m-d",$last_date))
        @php $last_date=strtotime($post->created_at) @endphp

        <div class="row mt-4">
            <div class="col-auto">
                <div class="card rounded-pill bg-light-green border-0 shadow">
                    <div class="card-body px-4">
                        <i class="far fa-calendar-alt me-1"></i> {{date('d',$last_date)}} {{ \App\Services\DateSerive::get_month(date('m',$last_date)) }}
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="row mt-4">
        <div class="col-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-1">
                            <div class="w-100 rounded bg-warning d-flex" style="height: 100px">
                                <i class="far fa-newspaper m-auto fa-2x text-white" aria-hidden="true"></i>
                            </div>
                            <div class="card mt-4 border-0 shadow rounded-pill bg-light-blue">
                                <div class="card-body d-flex justify-content-center py-1 px-1">
                                    <i class="far fa-clock my-auto me-2"></i>
                                    <p class="m-0">
                                        {{date('H:i',strtotime($post->created_at))}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-11">
                            <h4>{{$post->title}}</h4>
                            <p class="news-text mt-4 m-auto" style="-webkit-line-clamp: 4;">
                                {!! $post->description !!}
                            </p>
                            <div class="row justify-content-end">
                                <div class="d-flex justify-content-end col-auto">
                                    <a href="{{route('user.offers.show',$post->offer_id)}}" class="btn btn-primary my-4 fs-4 me-5">{{__('Перейти к офферу')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

@endsection
