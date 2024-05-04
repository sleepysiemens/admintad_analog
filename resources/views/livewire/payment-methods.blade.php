<div>
    <div class="row my-3">
        @foreach($payment_methods as $method)
            <div class="col-auto">
                <button class="btn fs-4 @if($selected_method['title'] == $method['title']) bg-primary btn-primary @endif " wire:click="select_method('{{$method['title']}}')">
                    {{$method['title']}}
                </button>
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-12 my-2">
            <div class="card bg-light-green border-green" style="border-radius: 10px">
                <div class="card-body d-flex">
                    <i class="fas fa-info-circle fa-2x text-green my-auto"></i>
                    <p class="my-auto ms-3">
                        Комиссия составляет {{$selected_method['commission']}}% от общей суммы операции.
                    </p>
                </div>
            </div>
        </div>

        <form method="post" action="{{route('user.profile.update')}}" class="col-12 row">
            @csrf
            @method('patch')
            @foreach($selected_method['inputs'] as $input)
                <div class="col-6">
                    <div class="form-group mt-3">
                        <label>{{$input['title']}}</label>
                        <input type="text" class="form-control fs-4 bg-light" name="{{$input['value']}}" value="{{auth()->user()->{$input['value']} }}">
                    </div>
                </div>
            @endforeach

                <div class="col-6 d-flex mt-3">
                    <button class="btn btn-primary fs-4 form-control bg-primary mt-auto mb-4">
                        {{__('Сохранить')}}
                    </button>
                </div>
        </form>

    </div>
</div>
