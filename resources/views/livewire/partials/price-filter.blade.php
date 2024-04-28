<div class="col-auto">
    <div class="dropdown">
        <button class="btn btn-primary bg-primary mt-0 fs-5" type="button" wire:click="dropdown('price')">
            {{__('Отчисления')}}<i class="fas fa-caret-down ms-2 @if($show_price) rotate-180 @endif"></i>
        </button>
        <div class="dropdown-menu px-3 @if($show_price) d-block @endif">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <input type="number" class="form-control fs-5" min="0" max="10000" name="price_from" wire:change="filter($event.target.value, 'price_from')" placeholder="{{__('От')}}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input type="number" class="form-control fs-5" min="0" max="10000" name="price_to" wire:change="filter($event.target.value, 'price_to')" placeholder="{{__('До')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
