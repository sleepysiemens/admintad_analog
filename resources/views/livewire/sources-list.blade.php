<div>
    <div class="row mt-5">
        @foreach($source_cards as $card)
            <div class="col-3">
                <div class="card  shadow @if($status == $card['title']) border-primary border-2 @else border-0 @endif" style="border-radius: 15px">
                    <div class="card-body row">
                        <div class="col-4 d-flex">
                            <div wire:click="filter('{{$card['title']}}')" class="m-auto rounded-circle d-flex" style="width: 65px; height: 65px; background-color: rgba({{$card['color']}}, .1); cursor: pointer">
                                <div class="m-auto rounded-circle w-50 h-50" style="background-color: rgba({{$card['color']}}, .5);"></div>
                            </div>
                        </div>
                        <div class="col-8">
                            <p class="m-0">{{$card['title']}}</p>
                            <h1>{{$card['count']}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row mt-5">
        <div style="border-radius: 10px" class="overflow-hidden border">
            <table class="table bg-white" >
                <thead class="bg-light-blue">
                <tr>
                    <th class="border-end">{{__('ID')}}</th>
                    <th class="border-end">{{__('Дата')}}</th>
                    <th class="border-end">{{__('Название')}}</th>
                    <th class="border-end">{{__('Ссылка')}}</th>
                    <th class="">{{__('Статус')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sources as $source)
                    <tr>
                        <td class="border-end">{{$source->id}}</td>
                        <td class="border-end">{{$source->created_at}}</td>
                        <td class="border-end">{{$source->title}}</td>
                        <td class="border-end">{{$source->link}}</td>
                        <td>
                            @if(!auth()->user()->is_admin)
                                {{$source->status}}
                            @else
                                <select class="form-select fs-5" wire:change="change_status({{$source->id}},$event.target.value)">
                                    @foreach(['Принят', 'Не принят', 'На проверке'] as $status_)
                                        <option value="{{$status_}}" @if($status_ == $source->status) selected @endif>{{$status_}}</option>
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
