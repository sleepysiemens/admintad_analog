<div class="col-auto">
    <div class="dropdown">
        <button class="btn btn-primary bg-primary mt-0 fs-5" type="button" wire:click="dropdown('source')">
            {{__('Источники')}}<i class="fas fa-caret-down ms-2 @if($show_source) rotate-180 @endif"></i>
        </button>
        <ul class="dropdown-menu w-100 @if($show_source) d-block @endif">
            @foreach($allowed_sources as $source)
                <li>
                    <div class="form-check row px-3">
                        <input class="col-2" id="{{$source}}" type="checkbox" wire:click="filter($event.target.value, 'source')" value="{{$source}}"/>
                        <label class="form-check-label col-9 fs-5" for="{{$source}}">{{$source}}</label>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
