<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark">

    <div class="container">
        <a class="navbar-brand" href="index.html">{{env('APP_NAME')}}<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('landing.index')}}">{{__('Главная')}}</a>
                </li>
                <li><a class="nav-link" href="{{route('landing.index')}}">{{__('Офферы')}}</a></li>
                <li><a class="nav-link" href="{{route('landing.index')}}">{{__('О нас')}}</a></li>
                <li><a class="nav-link" href="{{route('landing.index')}}">{{__('Вебмастеру')}}</a></li>
                <li><a class="nav-link" href="{{route('landing.index')}}">{{__('Рекламодателю')}}</a></li>
                <li><a class="nav-link" href="{{route('landing.index')}}">{{__('Блог')}}</a></li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li><a class="nav-link" href="{{route('login')}}"><i class="fa-solid fa-arrow-right-to-bracket"></i></a></li>
            </ul>
        </div>
    </div>

</nav>