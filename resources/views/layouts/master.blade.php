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

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slider.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link href="{{ asset('source/bootstrap-3.3.6-dist/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

</head>
<body>
<div class="allcontain">
    @include('partials.header')

    @yield('contain')


    @include('partials.footer')
</div>
</body>
</html>
