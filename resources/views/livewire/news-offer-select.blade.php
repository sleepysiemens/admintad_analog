<div class="form-group mt-3">
    <label>{{__('Оффер')}}</label>
    <select type="text" class="form-control fs-4" name="offer_id" required>
        @foreach($offers as $offer)
            <option @if($offer->id==$selected) selected @endif value="{{$offer->id}}">{{$offer->title}}</option>
        @endforeach
    </select>
</div>
