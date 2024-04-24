<nav class="custom-navbar navbar navbar navbar-expand-md navbar-light bg-white m-0 py-3">
    <div class="row justify-content-end w-75 px-5 ms-auto">
        @if(auth()->user()==null)
            <div class="col-1">
                <a class="nav-link" href="{{route('login')}}"><i class="fa-solid fa-arrow-right-to-bracket"></i></a>
            </div>
        @else
            <div class="col-2">
                <div class="card bg-light-green border-green rounded-pill">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 pe-1 d-flex">
                                <i class="fas fa-wallet fa-2x m-auto text-green"></i>
                            </div>
                            <div class="col-9">
                                <p class="m-0">{{__('Баланс:')}} 0 ₽</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card bg-light-blue border-light-blue rounded-pill">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 d-flex">
                                <i class="bg-white fas fa-user-circle fa-2x m-auto overflow-hidden text-blue"></i>
                            </div>
                            <div class="col-9">
                                <p class="m-0">{{auth()->user()->name}} (ID: {{auth()->user()->id}})</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

</nav>
