<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title> MiMoto - @yield('title') </title>
    <meta name="description" content="Compra y venta de motocicletas en Costa Rica. Cuadraciclos y Motos">
    <meta name="author" content="MiMoto">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slider.css') }}" rel="stylesheet">
    {{--<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">--}}
    <link href="{{ asset('source/bootstrap-3.3.6-dist/css/bootstrap.css') }}" rel="stylesheet">
    {{--<link href="{{ asset('source/fontawesome-free-5.3.1-web/css/fontawesome.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body>
@include('partials.header')

@yield('contain')


@include('partials.footer')
</body>
</html>
