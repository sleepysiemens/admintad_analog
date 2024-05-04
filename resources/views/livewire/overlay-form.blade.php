<div class="w-100 h-100 position-fixed  @if($is_visible) d-flex @else d-none @endif" style="z-index: 100; background-color: rgba(0,0,0,.25);">
    <div class="row m-auto w-100 justify-content-center">
        <div class="card col-8 shadow position-relative overflow-hidden" style="border-radius: 15px">
            <button class="position-absolute btn btn-primary bg-primary m-0 rounded-0" wire:click="change_visibility" style="top:0; right:0; border-bottom-left-radius: 15px !important">
                <i class="fas fa-times fa-2x"></i>
            </button>
            <div class="card-body">
                <form method="post" action="{{route('user.offers.get_link', $offer->id)}}">
                    @csrf
                    <h1 class="text-center">{{__('Запрос на получение оффера')}}</h1>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mt-4">
                                <label>{{__('Источник трафика')}}</label>
                                <select class="form-control fs-4" name="sources" required>
                                    @foreach($sources as $source)
                                        <option value="{{$source->id}}">{{$source->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mt-4">
                                <label>{{__('Планируемый объем лидов в день')}}</label>
                                <input type="number" class="form-control fs-4" name="daily_leads" required>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary bg-primary w-100 fs-4 mt-5">{{__('Получить ссылку')}}</button>
                </form>
            </div>
        </div>
    </div>
</div>
