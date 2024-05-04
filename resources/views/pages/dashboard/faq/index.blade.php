@php
    if(auth()->user()->is_admin) $extends = 'layouts.admin'; else $extends = 'layouts.user';
@endphp
@extends($extends)

@section('FAQ') active @endsection

@section('content')
    <div class="row mb-3">
        <div class="col-auto d-flex">
            <h2 class="fs-1 my-auto">{{__('Вопрос - ответ')}}</h2>
        </div>
        @if(auth()->user()->is_admin)
            <div class="col-auto">
                <a href="{{route('admin.faq.create')}}" class="btn btn-primary bg-primary my-auto fs-3">{{__('Новый вопрос')}}</a>

            </div>
        @endif
    </div>

    <div class="row mt-5">
        @foreach($questions as $question)
            <livewire:FaqBlock question_id="{{$question->id}}"/>
        @endforeach
    </div>
@endsection
