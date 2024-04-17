<nav class="custom-navbar navbar navbar navbar-expand-md navbar-light bg-white pb-0">

    <div class="container">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item active"><a class="nav-link" href="{{route('landing.index')}}">{{__('Главная')}}</a></li>
                <li><a class="nav-link" style="color: black !important;" href="{{route('landing.index')}}">{{__('Офферы')}}</a></li>
                <li><a class="nav-link" style="color: black !important;" href="{{route('landing.index')}}">{{__('О нас')}}</a></li>
                <li><a class="nav-link" style="color: black !important;" href="{{route('landing.index')}}">{{__('Вебмастеру')}}</a></li>
                <li><a class="nav-link" style="color: black !important;" href="{{route('landing.index')}}">{{__('Рекламодателю')}}</a></li>
                <li><a class="nav-link" style="color: black !important;" href="{{route('landing.index')}}">{{__('Блог')}}</a></li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                @if(auth()->user()==null)
                    <li>
                        <a class="nav-link" href="{{route('login')}}"><i class="fa-solid fa-arrow-right-to-bracket"></i></a>

                    </li>
                @else
                    <li class="d-flex">
                        <div class="card bg-light rounded-pill">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3 pe-1 d-flex">
                                        <i class="fas fa-wallet fa-2x m-auto"></i>
                                    </div>
                                    <div class="col-9">
                                        <p class="m-0">{{__('Баланс:')}}</p>
                                        <div class="row">
                                            <div class="col-4">
                                                0€
                                            </div>
                                            <div class="col-4">
                                                0$
                                            </div>
                                            <div class="col-4">
                                                0₽
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="card bg-light rounded-pill position-relative">
                            <a class="nav-link d-flex position-absolute d-flex" style="right: 80%; top: 0; bottom: 0" href="@if(auth()->user()->is_admin) {{route('admin.main.index')}} @else {{route('user.main.index')}} @endif "><i class="bg-white fas fa-user-circle fa-2x m-auto overflow-hidden"></i></a>
                            <div class="card-body px-5">
                                <p class="m-0 lh-1">(ID: {{auth()->user()->id}})</p>
                                <p class="m-0 lh-1 mt-1">{{auth()->user()->name}}</p>
                            </div>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>

</nav>
