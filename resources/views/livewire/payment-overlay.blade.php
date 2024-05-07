<div class="w-100 h-100 position-fixed  @if($is_visible) d-flex @else d-none @endif" style="z-index: 100; background-color: rgba(0,0,0,.25);">
    <div class="row m-auto w-100 justify-content-center">
        <div class="card col-8 shadow position-relative overflow-hidden" style="border-radius: 15px">
            <button class="position-absolute btn btn-primary bg-primary m-0 rounded-0" wire:click="change_visibility" style="top:0; right:0; border-bottom-left-radius: 15px !important">
                <i class="fas fa-times fa-2x"></i>
            </button>
            <div class="card-body">
                <form method="post" action="{{route('user.payouts.store')}}">
                    @method('put')
                    @csrf
                    <input type="hidden" name="currency" value="{{$currency}}">
                    <h1 class="text-center">{{__('Запрос на получение выплаты')}}</h1>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mt-4">
                                <label>{{__('Платежная система')}}</label>
                                <select class="form-control fs-4" name="payment_system" required>
                                    @foreach(['WebMoney', 'Qiwi', 'Яндекс.Деньги', 'Capitalist', 'USDT (TRC20)', 'Банковская карта'] as $method)
                                        <option value="{{$method}}">{{$method}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mt-4">
                                <label>{{__('Сумма выплаты')}}</label>
                                <input type="number" class="form-control fs-4" name="payment_amount" @if($currency == 'rub') min="3000" @elseif($currency == 'usd') min="50" @endif max="{{$remain}}" required>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary bg-primary w-100 fs-4 mt-5">{{__('Получить выплату')}}</button>
                </form>
            </div>
        </div>
    </div>
</div>
