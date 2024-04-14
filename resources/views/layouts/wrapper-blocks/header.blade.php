<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark">

    <div class="container">
        <a class="navbar-brand" href="{{route('landing.index')}}">{{env('APP_NAME')}}<span>.</span></a>

        <div>
            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li>
                    <div class="card bg-transparent border-secondary h-100 position-relative">
                        <i class="fas fa-user-circle fa-2x position-absolute text-white" style="top:0; bottom:0"></i>
                        <div class="card-body">
                            <p class="m-0 text-white">{{auth()->user()->name}}</p>
                            <p class="m-0 text-light">(ID: {{auth()->user()->id}})</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</nav>
