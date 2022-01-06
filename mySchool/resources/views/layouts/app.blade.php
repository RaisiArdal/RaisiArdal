<!doctype html>
<?php
use App\Libraries\svgSite;
$svg= new svgSite();
?>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> وب سایت شخصی مصطفی رییسی</title>

    <!-- Scripts -->
    <script  type="text/javascript"  src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script  type="text/javascript"  src="{{ asset('js/bootstrap.js') }}"></script>
    <script  type="text/javascript"  src="{{ asset('js/myJs.js') }}" ></script>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    @livewireStyles

</head>
<body>
<div id="app">
    <header>
        @include('sections.header')
    </header>

        <main class="py-4 container-fluid">
            @yield('content')
        </main>

    <footer id="myFooter" class="page-footer font-small text-white lighten-3 pt-4">
        @include('sections.footer')

    </footer>
    </div>
</body>
@include('sections.script')

</html>
