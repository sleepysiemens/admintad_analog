<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark">

    <div class="container">
        <a class="navbar-brand" href="{{route('landing.index')}}">{{env('APP_NAME')}}<span>.</span></a>

        <div>
            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li class="px-2">
                    <div class="card bg-transparent border-secondary h-100 position-relative">
                        <div class="card-body py-1">
                            <div class="row">
                                <div class="col-3 d-flex">
                                    <i class="fas fa-wallet text-white fa-2x m-auto"></i>
                                </div>
                                <div class="col-9">
                                    <p class="m-0 text-white text-capitalize">{{__('Баланс')}}</p>
                                    <p class="m-0 text-light">(ID: {{auth()->user()->id}})</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="px-2">
                    <div class="card bg-transparent border-secondary h-100 position-relative">
                        <div class="position-absolute d-flex" style="top:0; bottom:0; right: 85%">
                            <i class="fas fa-user-circle fa-3x text-white my-auto rounded-circle" style="background-color: #3c3e8f !important"></i>
                        </div>
                        <div class="card-body px-5 py-1">
                            <p class="m-0 text-white text-capitalize">{{auth()->user()->name}}</p>
                            <p class="m-0 text-light">(ID: {{auth()->user()->id}})</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</nav>
