<div class="card mt-5 border-0" style="border-radius: 10px">
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
    <div class="card-body mx-1 py-2">
        <div class="scroll" style="height: 450px;">
            @foreach($news as $post)
                <div class="border-bottom py-3">
                    <div class="row pb-4">
                        <div class="col-2">
                            <div class="w-100" style="height: 100px">
                                <img src="{{ asset('img/newsdash.png' . $post->image) }}" alt="News Image" class="img-fluid" style="max-width: 76px; max-height: 80px;">
                                <div class="card mt-3 border-0 bg-light-blue" style="width: 77px; height: 30px;">
                                    <div class="card-body d-flex align-items-center py-1 px-3">
                                        <i class="far fa-clock me-2"></i>
                                        <p class="m-0 font-weight-bold" style="font-weight: bold;">
                                            {{ date('H:i', strtotime($post->created_at)) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-10">
                            <h4>{{$post->title}}</h4>
                            <p class="news-text mt-2">
                                {!! $post->description !!}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
