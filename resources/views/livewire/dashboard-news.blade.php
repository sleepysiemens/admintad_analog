<div class="card mt-5 border-0 shadow" style="border-radius: 10px">
    <div class="card-header py-4 mx-2 bg-transparent">
        <div class="row justify-content-between">
            <h2 class="fw-bold col-6 my-auto">{{__('Новости')}}</h2>
            <div class="col-6 row justify-content-end">
                <div class="col-auto">
                    <button wire:click="change_show" class="btn btn-primary @if(!$show_personal) bg-primary @endif text-uppercase fs-5 py-2 m-0">
                        {{__('Все')}}
                    </button>
                </div>
                <div class="col-auto">
                    <button wire:click="change_show" class="btn btn-primary @if($show_personal) bg-primary @endif text-uppercase fs-5 py-2 m-0">
                        {{__('По моим офферам')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body mx-2 py-4">
        <div class="scroll" style="height: 450px;">
            @foreach($news as $post)
                <div class="border-bottom py-3">
                    <div class="row">
                        <div class="col-2">
                            <div class="w-100 rounded bg-warning d-flex" style="height: 100px">
                                <i class="far fa-newspaper m-auto fa-2x text-white"></i>
                            </div>
                        </div>
                        <div class="col-10">
                            <h4>{{$post->title}}</h4>
                            <p class="news-text mt-4 m-auto">
                                {!! $post->description !!}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
