<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AZIZOGLU GAME</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @if(isset($game))
        <link href="{{ asset('game_src/css/reset.css') }}" rel="stylesheet">
        <link href="{{ asset('game_src/css/main.css') }}" rel="stylesheet">
    @endif
</head>
<body>

    @yield('game_content')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @if(isset($game))
        <script src="{{ asset('game_src/js/jquery.transit.min.js') }}"></script>
        <script src="{{ asset('game_src/js/buzz.min.js') }}"></script>
        <script src="{{ asset('game_src/js/main.js') }}"></script>
    @endif
</body>
</html>
