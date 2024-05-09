@php
    if(auth()->user()->is_admin) $extends = 'layouts.admin'; else $extends = 'layouts.user';
@endphp
@extends($extends)

@section('Блог') active @endsection

@section('content')

    <div class="row mb-3 justify-content-between">
        <div class="col-auto d-flex">
            <h2 class="fs-1 my-auto">{{__('Блог')}}</h2>
        </div>

        <a href="{{route('admin.news.index')}}">{{__('Назад')}}</a>
        <form method="post" action="{{route('admin.blog.update', $post->id)}}">
            @csrf
            @method('patch')
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="form-group mt-3">
                            <label>{{__('Категория')}}</label>
                            <select class="form-control fs-4" name="category" required>
                            @foreach(['Кейсы', 'Гайды', 'Трекеры', 'Новости', 'Бонусы'] as $category)
                                <option value="{{$category}}" @if($category == $post->category) selected @endif>{{$category}}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group mt-3">
                            <label>{{__('Заголовок')}}</label>
                            <input type="text" class="form-control fs-4" name="title" placeholder="{{__('Заголовок')}}" value="{{$post->title}}" required>
                        </div>

                        <div class="form-group mt-3">
                            <label>{{__('Обложка')}}</label>
                            <input type="text" class="form-control fs-4" name="img" placeholder="{{__('Обложка')}}" value="{{$post->img}}" required>
                        </div>

                        <div class="form-group mt-3">
                            <label>{{__('Описание')}}</label>
                            <textarea id="summernote" placeholder="{{__('Описание')}}" name="description" class="form-control" required>{{$post->description}}</textarea>
                        </div>

                        <div class="row">
                            <div class="col-6 d-flex">
                                <div class="form-group mt-auto mb-4 w-100">
                                    <button type="submit" class="btn btn-primary bg-primary py-4 w-100 fs-4 ">{{__('Сохранить')}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection

@section('scripts')
    <script>
        $('#summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
    </script>
@endsection

