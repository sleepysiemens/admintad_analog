<div>
    <div class="row mb-3 justify-content-between">
        <div class="col-auto d-flex">
            <h2 class="fs-1 my-auto">{{__('Офферы')}}</h2>
        </div>

        <div class="col d-flex">
            @if(auth()->user()->is_admin)
                <a href="{{route('admin.offers.create')}}" class="btn btn-primary bg-primary my-auto fs-3">{{__('Добавить оффер')}}</a>
            @endif
        </div>

        <div class="col-6 d-flex">
            <div class="input-group mb-3 border overflow-hidden my-auto" style="border-radius: 15px">
                <input wire:change="search($event.target.value)" type="text" class="form-control border-0 fs-4" placeholder="{{__('Поиск...')}}" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary rounded-0 h-100 border-0 mt-0" type="button">
                        <i class="fas fa-search fa-2x"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4 px-3">
        <div class="card border-0 shadow" style="border-radius: 12px;">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <a class="d-flex text-decoration-none py-2" wire:click="filters" style="cursor: pointer">
                            <i class="fas fa-chevron-circle-down fa-2x transition @if($show_filters) rotate-180 @endif"></i>
                            <p class="ms-2 my-auto fs-3">{{__('Фильтр')}}</p>
                        </a>
                    </div>
                </div>

                {{--ФИЛЬТРЫ--}}
                <div class="row mt-4 @if(!$show_filters) d-none @endif">
                    @include('livewire.partials.country-filter')
                    @include('livewire.partials.price-filter')
                    {{--@include('livewire.partials.cost-filter')--}}
                    @include('livewire.partials.source-filter')
                    <div class="col-auto">
                        <a href="@if(auth()->user()->is_admin) {{route('admin.offers.index')}} @else {{route('user.offers.index')}} @endif" class="btn btn-primary bg-primary mt-0 fs-5">
                            {{__('Сбросить фильтр')}}
                        </a>
                    </div>

                </div>
                {{--/ФИЛЬТРЫ--}}
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($offers as $offer)
            <div class="col-4 mb-4">
                <div class="card shadow overflow-hidden border-0 position-relative" style="border-radius: 12px;">
                    <span class="position-absolute text-uppercase px-1" style="right: 0; border-bottom-left-radius: 12px; font-size: 14px; padding: 5px; line-height: 12px; background-color: #FF4500; color: white;">
                        <span style="font-weight: bold; font-size: 10px;">{{__('exclusive')}}</span>
                    </span>
                    <div class="card-body bg-white">
                        <div class="row">
                            <div class="col-4">
                                <img class="w-100" style="height: 160px; object-fit: cover;" src="{{$offer->image}}">
                            </div>
                            <div class="col-8">
                                <h4 style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;" class="text-black">{{$offer->title}}</h4>

                                <div class="mb-4" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; height: 85px">
                                    {!! $offer->description !!}
                                </div>
                                <div class="row justify-content-between">
                                    <p class="col-5 my-auto">ID: {{$offer->id}}</p>
                                    <div class="col-7">
                                        <a href="@if(auth()->user()->is_admin) {{ route('admin.offers.show', $offer->id) }} @else {{ route('user.offers.show', $offer->id) }} @endif" class="btn btn-sm btn-primary fs-5 mt-0">
                                            {{__('Подробнее')}}
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row border-top mx-2 mt-3">
                            <div class="col-4">
                                <p class="m-0">{{__('Страна')}}</p>
                                <p class="text-black m-0">{{$offer->country}}</p>
                            </div>
                            <div class="col-4">
                                <p class="m-0">{{__('Стоимость')}}</p>
                                <p class="text-black m-0">{{$offer->cost}}</p>

                            </div>
                            <div class="col-4">
                                <p class="m-0">{{__('Отчисления')}}</p>
                                <p class="text-black m-0" style="font-weight: 500">{{$offer->price}} ₽</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
