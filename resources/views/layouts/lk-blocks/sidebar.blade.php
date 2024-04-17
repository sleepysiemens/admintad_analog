<div class="h-100">
    <div class="custom-navbar bg-white bg-light d-flex">
        <a class="navbar-brand m-auto" href="{{route('landing.index')}}">{{env('APP_NAME')}}<span>.</span></a>
    </div>

    <div class="list-group mt-5">

        @foreach($navs as $nav)
            <a href="{{$nav['link']}}" class="list-group-item list-group-item-action border-0 fs-3 py-3 mx-auto rounded @yield($nav['title'])">
                <i class="{{$nav['icon']}} me-3"></i><span>{{$nav['title']}}</span>
            </a>
        @endforeach
    </div>
</div>
