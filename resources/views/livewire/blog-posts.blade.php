<div>
    <div class="row mt-3 justify-content-between">
        <h1 class="text-black col-auto">{{__('Блог')}}</h1>

        <div class="row col-6 justify-content-end">
            <a wire:click="select_category('')" class="col-auto my-auto text-decoration-none"><h4>{{__('Все')}}</h4></a>
            <a class="col-auto my-auto text-decoration-none"><h4>{{__('Популярные')}}</h4></a>
            <a class="col-auto my-auto text-decoration-none"><h4>{{__('Просматриваемые')}}</h4></a>
        </div>
    </div>

    <div class="row mb-5 mt-3 justify-content-between">
        <div class="col-8 row">
            @foreach($posts as $post)
                <div class="card border-0 shadow" style="border-radius: 15px">
                    <div class="card-body p-4">
                        <img class="w-100" style="border-radius: 10px" src="{{$post->img}}">
                        <h1 class="mt-4 fw-bold">{{__($post->title)}}</h1>
                        <div class="news-text my-3">
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
                            <div class="col-auto">
                                <a href="@if(auth()->user()->is_admin) {{route('admin.blog.show', $post->id)}} @else {{route('blog.show', $post->id)}} @endif" class="text-decoration-none fs-6" style="color: #0a53be!important;">{{__('Читать далее')}} <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="col-4">
            <div class="card border-0 shadow" style="border-radius: 15px">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-12 mb-2">
                            <h4 class="text-black">{{__('Категории')}}</h4>
                        </div>

                        @foreach(['Кейсы', 'Гайды', 'Трекеры', 'Новости', 'Бонусы'] as $category_)
                            <a wire:click="select_category('{{$category_}}')" class="list-group-item list-group-item-action border-0 fs-3 py-3 mx-auto rounded position-relative  @if($category == $category_) active @endif" style="cursor: pointer">
                                <h5>{{__($category_)}}</h5>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

