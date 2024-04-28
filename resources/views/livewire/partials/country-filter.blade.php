<div class="col-auto">
    <div class="dropdown">
        <button class="btn btn-primary bg-primary mt-0 fs-5" type="button" wire:click="dropdown('countries')">
            {{__('Страна')}}<i class="fas fa-caret-down ms-2 @if($show_countries) rotate-180 @endif"></i>
        </button>
        <ul class="dropdown-menu w-100 @if($show_countries) d-block @endif">
            @foreach($countries as $country)
                <li>
                    <div class="form-check row px-3">
                        <input class="col-2" id="{{$country}}" type="checkbox" wire:click="filter($event.target.value, 'country')" value="{{$country}}"/>
                        <label class="form-check-label col-9 fs-5" for="{{$country}}">{{$country}}</label>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
