@extends('layouts.user')

@section('Новости') active @endsection

@section('content')

    <div class="row mb-3 justify-content-between">
        <div class="col">
            <h1>{{__('Новости')}}</h1>
        </div>
    </div>
    @foreach($news as $post)
        @if(!isset($last_date) or date("m-d",strtotime($post->created_at))!=date("m-d",$last_date))
            @php $last_date=strtotime($post->created_at) @endphp

            <div class="row mt-4">
                <div class="col-auto">
                    <div class="bg-light-green" style="font-weight: bold; color: black; border-radius: 10px;">
                        <div class="card-body px-3">
                            <i class="far fa-calendar-alt me-1"></i> {{date('d',$last_date)}} {{ \App\Services\DateSerive::get_month(date('m',$last_date)) }}
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="row mt-4">
            <div class="col-12">
                <div class="card border-0">
                    <div class="card-body" style="background-image: url('/img/news.png'); background-size: 70px; background-position: 10px 10px; background-repeat: no-repeat;">
                        <div class="row mt-3">
                            <div class="col-1"></div>
                            <div class="col-10">
                                <h4>{{$post->title}}</h4>
                                <p class="news-text mt-4 m-auto" style="-webkit-line-clamp: 4;">
                                    {!! $post->description !!}
                                </p>
                                <div class="row mt-3">
                                    <div class="col-auto">
                                        <a href="{{ route('admin.offers.show', $post->id) }}" class="btn btn-primary fs-4" style="color: grey !important; background-color: transparent !important; font-weight: bold; text-decoration: none; margin-left: -32px; margin-top: -10px;">
                                            <span style="transition: color 0.3s; text-decoration: underline; margin-top: 5px;">{{ __('Перейти к оферу') }}</span>
                                        </a>

                                        <style>
                                            a:hover span {
                                                color: black !important;
                                            }
                                        </style>   </div>
                                </div>
                            </div>
                            <div class="col-auto rounded" style="margin-left: -1330px; margin-top: 60px;">
                                <div class="card mt-4 border-0 bg-light-blue">
                                    <div class="card-body d-flex align-items-center py-1 px-3">
                                        <i class="far fa-clock me-2"></i>
                                        <p class="m-0 font-weight-bold" style="font-weight: bold;">
                                            {{ date('H:i', strtotime($post->created_at)) }}
                                        </p>
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
