<div class="h-100 ps-4">
    <div class="custom-navbar bg-white bg-light d-flex">
        <a class="navbar-brand bm-3" href="{{route('landing.index')}}">
            <img class="w-100" src="{{asset('img/IMG_5771.PNG')}}">
        </a>
    </div>

    <div class="list-group mt-5">

        @foreach($navs as $nav)
            <a href="{{$nav['link']}}" class="list-group-item list-group-item-action border-0 fs-3 py-3 mx-auto rounded @yield($nav['title'])">
                <i class="{{$nav['icon']}} me-3"></i><span>{{$nav['title']}}</span>
            </a>
        @endforeach

            <a href="{{route('logout.get')}}" class="list-group-item list-group-item-action border-0 fs-3 py-3 mx-auto rounded mt-5">
                <i class="fas fa-sign-out-alt me-3"></i><span>{{__('Выйти')}}</span>
            </a>
    </div>
</div>

<style>
.list-group-item {
    background-color: #ffffff;
    color: #f4f7fe;
    border: none;
    border-radius: 10px;
    transition: all 0.4s ease-in-out;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 15px;
    position: relative;
    overflow: hidden;
}

.list-group-item::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    width: 0;
    height: 100%;
    transition: width 0.4s ease-in-out;
    transform: translateY(-50%);
    z-index: -1;
}

.list-group-item:hover::before {
    width: 100%;
}


.list-group-item span {
    font-size: 16px;
    font-weight: bold;
    margin-left: 15px;
    z-index: 1;
}

.list-group-item-action:focus,
.list-group-item-action:hover {
    background-color: #f4f7fe;
    border-color: transparent;
}

</style>
