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
            <textarea class="form-control" id="summernote" name="text[offer_rules]" rows="7">@if($offer_rules!=null){{$offer_rules->text}}@endif</textarea>
        </div>

        <div class="form-group mt-4">
            <label>{{__('Источники трафика')}}</label>
            <textarea class="form-control fs-4" rows="10" name="text[traffic_sources]">@if($traffic_sources!=null){{$traffic_sources->text}}@endif</textarea>
        </div>


        <div class="row">
            <div class="col-6">
                <div class="form-group mt-4">
                    <label>{{__('Разрешенные сточники трафика')}}</label>
                    <textarea class="form-control fs-4" rows="10" name="text[allowed_traffic_sources]">@if($allowed_traffic_sources!=null){{$allowed_traffic_sources->text}}@endif</textarea>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group mt-4">
                    <label>{{__('Запрещенные сточники трафика')}}</label>
                    <textarea class="form-control fs-4" rows="10" name="text[prohibited_traffic_sources]">@if($prohibited_traffic_sources!=null){{$prohibited_traffic_sources->text}}@endif</textarea>
                </div>
            </div>
        </div>

        <div class="form-group mt-4">
            <button type="submit" class="btn btn-primary bg-primary fs-4">{{__('Сохранить')}}</button>
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
