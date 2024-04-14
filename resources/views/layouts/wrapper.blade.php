<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{env('APP_NAME')}} | Dashboard</title>
    @include('layouts.wrapper-blocks.styles')
    @vite(
        [
            'resources/dist/css/adminlte.css',
            'resources/dist/js/adminlte.js',
            'resources/dist/js/pages/dashboard.js',
        ])
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    @include('layouts.wrapper-blocks.header')

    @yield('sidebar')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
        <!-- /.content -->
    </div>
</div>
<!-- ./wrapper -->
</body>
</html>

@include('layouts.wrapper-blocks.scripts')

