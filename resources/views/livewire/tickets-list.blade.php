<div>
    <div class="row mt-5">
        <div style="border-radius: 10px" class="overflow-hidden border">
            <table class="table bg-white" >
                <thead class="bg-light-blue">
                <tr>
                    <th class="border-end">{{__('ID')}}</th>
                    <th class="border-end">{{__('Дата')}}</th>
                    <th class="border-end">{{__('Плановая дата')}}</th>
                    <th class="border-end">{{__('Платежная система')}}</th>
                    <th class="border-end">{{__('Кошелек')}}</th>
                    <th class="border-end">{{__('Валюта')}}</th>
                    <th class="border-end">{{__('Сумма выплаты')}}</th>
                    <th class="border-end">{{__('Комиссия')}}</th>
                    <th class="border-end">{{__('Сумма')}}</th>
                    <th class="">{{__('Статус')}}</th>
                </tr>
                </thead>
                <tbody>

                @foreach($payouts as $payout)
                    <tr>
                        <td class="border-end">{{$payout->id}}</td>
                        <td class="border-end">{{$payout->created_at}}</td>
                        <td class="border-end">{{$payout->plan_date}}</td>
                        <td class="border-end">{{$payout->payment_system}}</td>
                        <td class="border-end">{{$payout->wallet}}</td>
                        <td class="border-end">{{$payout->currency}}</td>
                        <td class="border-end">{{$payout->payment_amount}}</td>
                        <td class="border-end">{{$payout->commission}}</td>
                        <td class="border-end">{{$payout->total_amount}}</td>
                        <td>
                            @if(!auth()->user()->is_admin)
                                {{$payout->status}}
                            @else
                                <select class="form-select fs-5" wire:change="change_status({{$payout->id}},$event.target.value)">
                                    @foreach(['Исполнен', 'Отклонен', 'В обработке'] as $status_)
                                        <option value="{{$status_}}" @if($status_ == $payout->status) selected @endif>{{$status_}}</option>
                                    @endforeach
                                </select>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
