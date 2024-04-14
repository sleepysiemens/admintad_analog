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

<body>

@include('layouts.landing_blocks.header')

@yield('content')

@include('layouts.landing_blocks.footer')


</body>

</html>
