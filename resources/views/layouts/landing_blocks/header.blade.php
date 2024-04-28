
<style>
    .custom-navbar {
        height: 72px; /* Измените значение на ваше усмотрение */
    }


</style>
<nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-white">
    <div class="container mt-0">
        <a class="navbar-brand" href="{{route('landing.index')}}">
            <img style="height: 72px;" src="{{asset('img/IMG_5771.PNG')}}">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item active"><a class="nav-link" href="{{route('landing.index')}}"><span style="color: black;">{{__('Главная')}}</span></a></li>
                <li><a class="nav-link" href="{{route('landing.index')}}"><span style="color: black;">{{__('Офферы')}}</span></a></li>
                <li><a class="nav-link" href="{{route('landing.index')}}"><span style="color: black;">{{__('О нас')}}</span></a></li>
                <li><a class="nav-link" href="{{route('landing.index')}}"><span style="color: black;">{{__('Вебмастеру')}}</span></a></li>
                <li><a class="nav-link" href="{{route('landing.index')}}"><span style="color: black;">{{__('Рекламодателю')}}</span></a></li>
                <li><a class="nav-link" href="{{route('landing.index')}}"><span style="color: black;">{{__('Блог')}}</span></a></li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li>
                    @if(auth()->user()==null)
                        <a class="nav-link" href="{{route('login')}}" style="color: black;"><i class="fa-solid fa-arrow-right-to-bracket"></i></a>
                    @else
                        <a class="nav-link d-flex" href="@if(auth()->user()->is_admin) {{route('admin.main.index')}} @else {{route('user.main.index')}} @endif " style="color: black;"><i class="fas fa-user-circle fa-2x"></i></a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>

