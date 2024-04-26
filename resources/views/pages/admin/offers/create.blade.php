@extends('layouts.admin')
@section('Офферы') active @endsection

@section('content')
    <a href="{{route('admin.offers.index')}}">{{__('Назад')}}</a>
    <form method="post" action="{{route('admin.offers.store')}}">
        @method('put')
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row mt-5">
                        <div class="col-6">
                            <div class="form-group mt-3">
                                <label>{{__('Источник')}}</label>
                                <select type="text" class="form-control fs-4" name="source" required>
                                    <option value="cpa.house">cpa.house</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mt-3">
                                <label>{{__('id оффера в источнике')}}</label>
                                <input type="text" class="form-control fs-4" name="source_offer_id" placeholder="{{__('id оффера')}}" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label>{{__('Заголовок')}}</label>
                        <input type="text" class="form-control fs-4" name="title" placeholder="{{__('Заголовок')}}" required>
                    </div>
                    <div class="form-group mt-3">
                        <label>{{__('Ссылка на обложку')}}</label>
                        <input type="text" class="form-control fs-4" name="image" placeholder="{{__('Ссылка на обложку')}}">
                    </div>
                    <div class="form-group mt-3">
                        <label>{{__('Описание')}}</label>
                        <textarea id="summernote" placeholder="{{__('Описание')}}" name="description" class="form-control" required></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label>{{__('Ссылка')}}</label>
                        <input type="text" class="form-control fs-4" name="link" placeholder="{{__('Ссылка')}}" required>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mt-4">
                                <label>{{__('Разрешенные сточники трафика')}}</label>
                                <textarea class="form-control fs-4" rows="10" name="allowed_sources"></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mt-4">
                                <label>{{__('Запрещенные сточники трафика')}}</label>
                                <textarea class="form-control fs-4" rows="10" name="prohibited_sources"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 row">
                            <div class="form-group mt-3 col-4">
                                <label>{{__('Цена')}}</label>
                                <input type="number" class="form-control fs-4" name="cost" placeholder="{{__('Цена')}}" required>
                            </div>
                            <div class="form-group mt-3 col-4">
                                <label>{{__('Отчисления')}}</label>
                                <input type="number" class="form-control fs-4" name="price" placeholder="{{__('Отчисления')}}" required>
                            </div>
                            <div class="form-group mt-3 col-4">
                                <label>{{__('Страна')}}</label>
                                <input type="text" class="form-control fs-4" name="country" placeholder="{{__('Страна')}}" required>
                            </div>
                        </div>
                        <div class="col-6 d-flex">
                            <div class="form-group mt-auto mb-4 w-100">
                                <button type="submit" class="btn btn-primary bg-primary py-4 w-100 fs-4  mt-0">{{__('Добавить')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
