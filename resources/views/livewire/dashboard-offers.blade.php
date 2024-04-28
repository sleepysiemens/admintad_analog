<div class="card mt-5 border-0" style="border-radius: 10px">
    <div class="card-header py-4 mx-2 bg-transparent">
        <div class="row justify-content-between">
            <h2 class="fw-bold col-5 my-auto">{{__('Офферы')}}</h2>
            <div class="col-7 row justify-content-end">
                <div class="col-auto">
                    <button wire:click="change_show" class="btn btn-primary @if(!$show_recomended) bg-primary @endif text-uppercase fs-5 py-2 m-0">
                        {{__('Новые')}}
                    </button>
                </div>
                <div class="col-auto">
                    <button wire:click="change_show" class="btn btn-primary @if($show_recomended) bg-primary @endif text-uppercase fs-5 py-2 m-0">
                        {{__('Рекомендуемые')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body mx-2 py-4">
        <div class="scroll" style="height: 450px;">
            @foreach($offers as $offer)
                <div class="border-bottom py-3">
                    <a class="row text-decoration-none" href="@if(auth()->user()->is_admin) {{route('admin.offers.show',$offer->id)}} @else {{route('user.offers.show',$offer->id)}} @endif">
                        <div class="col-2">
                            <img src="{{$offer->image}}" style="object-fit: cover; height: 100px; border-radius: 5px"  class="w-100 rounded d-flex">
                        </div>
                        <div class="col-9">
                            <h4>{{$offer->title}}</h4>
                            <p class="news-text mt-4 m-auto">
                                {!! $offer->description !!}
                            </p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
