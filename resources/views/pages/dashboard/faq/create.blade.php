@php
    if(auth()->user()->is_admin) $extends = 'layouts.admin'; else $extends = 'layouts.user';
@endphp
@extends($extends)

@section('FAQ') active @endsection

@section('content')
    <a href="{{route('admin.faq.index')}}">{{__('Назад')}}</a>

    <div class="row mb-3">
        <div class="col-auto d-flex">
            <h2 class="fs-1 my-auto">{{__('Вопрос - ответ')}}</h2>
        </div>
    </div>

    <form method="post" action="{{route('admin.faq.store')}}" class="row mt-5">
        @csrf
        @method('put')
        <div class="form-group mt-3">
            <label>{{__('Вопрос')}}</label>
            <input type="text" class="form-control fs-4" name="question" placeholder="{{__('Вопрос')}}" required>
        </div>

        <div class="form-group mt-3">
            <label>{{__('Ответ')}}</label>
            <textarea id="summernote" placeholder="{{__('Ответ')}}" name="answer" class="form-control" required></textarea>
        </div>

        <div class="form-group mt-auto mb-4 w-100">
            <button type="submit" class="btn btn-primary bg-primary py-4 w-100 fs-4 ">{{__('Добавить')}}</button>
        </div>
    </form>
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
