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

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    @vite([
    'resources/css/bootstrap.min.css',
    'resources/css/style.css',

    'resources/js/bootstrap.bundle.min.js',
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
        <div class="bg-light-blue h-100" style=" border-top-left-radius: 50px">
            <div style="padding: 45px">
                @yield('content')
            </div>
        </div>
    </div>
</div>


</body>

</html>
@yield('scripts')
