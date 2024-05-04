@extends('layouts.app')

@section('blog') active @endsection

@section('content')
    <div class="container mb-4">
        <div class="row mt-5">
            <a href="{{route('blog.index')}}">{{__('Назад')}}</a>
        </div>

        <div class="card border-0 shadow my-5" style="border-radius: 15px">
            <div class="card-body p-4">
                <img class="w-100" style="border-radius: 10px" src="{{$post->img}}">
                <h1 class="mt-4 fw-bold">{{__($post->title)}}</h1>
                <div class="my-3">
                    {!! $post->description !!}
                </div>
                <div class="row justify-content-between">
                    <div class="col-6 row">
                        <div class="col-auto border-end">
                            {{date("Y.m.d", strtotime($post->created_at))}}
                        </div>
                        <div class="col-auto border-end">
                            <i class="fas fa-star text-warning"></i> {{$post->rating}}
                        </div>
                        <div class="col-auto border-end">
                            <i class="far fa-eye"></i> {{$post->views}}
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <livewire:recomended-blog-posts/>
    </div>


@endsection
