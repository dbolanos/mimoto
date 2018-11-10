<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title> MiMoto - @yield('title') </title>
    <meta name="description" content="Compra y venta de motocicletas en Costa Rica. Cuadraciclos y Motos">
    <meta name="author" content="MiMoto">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="icon" type="image/png" href="/image/mimoto_icon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- START STYLE -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <!-- END STYLE -->

    <!-- START CUSTOM STYLE -->
        @yield('customCss')
    <!-- END CUSTOM STYLE -->

</head>
<body>
<div class="allcontain">
    @include('partials.header')

    @yield('contain')

    @include('partials.footer')
</div>
<!-- START CUSTOM SCRIPT -->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- END CUSTOM SCRIPT -->

<!-- START CUSTOM SCRIPT -->
    @yield('customScripts')
<!-- END CUSTOM SCRIPT -->
</body>
</html>
