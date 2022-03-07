  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Laravel App Template</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/spinner.css') }}" rel="stylesheet">
     <link href="{{ asset('css/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
<body id="page-top" class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper"> 
        <div id="app">
            <div id="cover-spin"></div>
            @yield('content')
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/plugins/overlay/js/OverlayScrollbars.min.js')}}"></script>
    <script src="{{asset('js/dist/adminlte.min.js')}}"></script>
</body>
</html>