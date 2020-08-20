<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head prefix="og: http://ogp.me/ns# website: http://ogp.me/ns/website#">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TripSwitch') }}</title>

    <!-- OGP -->
    <meta name="description"         content="NintendoSwitchで手に入るインディーズゲームの景色を投稿するサイト">
    <meta property="og:title"        content="NintendoSwitchで旅を">
    <meta property="og:description"  content="NintendoSwitchで手に入るインディーズゲームの景色を投稿するサイト">
    <meta property="og:type"         content="website">
    <meta property="og:site_name"    content="TripSwitch">
    <meta property="og:url"          content="https://trip-switch.herokuapp.com">
    <meta property="og:image"        content="{{ secure_asset('images/opg.jpeg') }}">
    <meta property="og:image:width"  content="1200">
    <meta property="og:image:height" content="630">
    <meta name="twitter:card"        content="summary_large_image">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @if(app('env') == 'production')
    <!-- Production -->
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ secure_asset('images/logo.png') }}">
        <!-- Scripts -->
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/layout.css') }}" rel="stylesheet">
    @else
    <!-- Local -->
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    @endif

</head>
<body>
    <div id="app">
        @include('layouts.nav')
        <main class="py-4">

            <!-- argicles_store,update flash message -->
            @if (session('flash_message'))
                <div class="flash_message bg-success text-center py-3 my-0 mb30">
                    {{ session('flash_message') }}
                </div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>
