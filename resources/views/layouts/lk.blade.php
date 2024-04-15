<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9a0abb07df.js" crossorigin="anonymous"></script>
    @vite([
    'resources/css/bootstrap.min.css',
    'resources/css/style.css',
    'resources/css/tiny-slider.css',
    'resources/js/bootstrap.bundle.min.js',
    'resources/js/tiny-slider.js',
    'resources/js/custom.js',
    ])
    <title>{{env('APP_NAME')}}</title>
</head>

<body class="bg-white">

<div class="row bg-white justify-content-between" style="min-height: 100vh">
    <div class="col-2 h-100">
        @yield('sidebar')
    </div>
    <div class="col-10">
        @include('layouts.lk-blocks.header')
        <div class="bg-light h-100 shadow" style=" border-top-left-radius: 50px">
            <div class="p-5">
                @yield('content')
            </div>
        </div>
    </div>
</div>


</body>

</html>
