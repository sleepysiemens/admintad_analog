@extends('layouts.admin')

@section('blog') active @endsection

@section('content')
    <div class="container mb-4">
        <div class="row mt-5 justify-content-between">
            <a class="col-auto me-auto my-auto" href="{{route('admin.blog.index')}}">{{__('Назад')}}</a>
            @if(auth()->user()->is_admin)
                <div class="col-auto row ms-auto">
                    <div class="d-flex justify-content-end col-auto">
                        <a href="{{{route('admin.blog.edit',$post->id)}}}" class="btn btn-primary bg-primary my-4 fs-4 "><i class="far fa-edit"></i></a>
                    </div>
                    <div class="d-flex justify-content-end col-auto">
                        <a href="{{{route('admin.blog.delete',$post->id)}}}" class="btn btn-primary bg-warning my-4 fs-4"><i class="far fa-trash-alt"></i></a>
                    </div>
                </div>
            @endif
        </div>

        <div class="card border-0 shadow my-5" style="border-radius: 15px">
            <div class="card-body p-4">
                <img class="w-100" style="border-radius: 10px" src="{{$post->img}}">
                <h1 class="mt-4 fw-bold">{{__($post->title)}}</h1>
                <div class="my-3">
                    {!! $post->description !!}
                </div>
                <div class="row w-100">
                    <div class="col-6 row">
                        <div class="col-auto border-end">
                            {{date("Y.m.d", strtotime($post->created_at))}}
                        </div>
                        <div class="col-auto border-end">
                            <i class="fas fa-star text-warning"></i> {{$post->rating}}
                        </div>
                        <div class="col-auto">
                            <i class="far fa-eye"></i> {{$post->views}}
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <livewire:recomended-blog-posts/>
    </div>


@endsection
