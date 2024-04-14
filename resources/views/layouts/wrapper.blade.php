<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9a0abb07df.js" crossorigin="anonymous"></script>    @vite([
    'resources/css/bootstrap.min.css',
    'resources/css/tiny-slider.css',
    'resources/css/style.css',

    'resources/js/bootstrap.bundle.min.js',
    'resources/js/tiny-slider.js',
    'resources/js/custom.js',
 ])
</head>
<body class="bg-light">

@include('layouts.wrapper-blocks.header')

<div class="container pt-5">

    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    {{__('Дашборд')}}
                </div>
                @yield('sidebar')
                <div class="card-body">
                    <ul class="nav flex-column nav-pills">
                        @foreach($navs as $nav)
                            <li class="nav-item mb-2">
                                <a href="{{$nav['link']}}" class="nav-link @if($nav['active']) active @endif">
                                    {{__($nav['title'])}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-8">
            @yield('content')
        </div>
    </div>


</div>

</body>
</html>
