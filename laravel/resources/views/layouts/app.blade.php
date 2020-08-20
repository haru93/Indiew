<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TripSwitch') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- 本番環境用 -->
    @if(app('env') == 'production')
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ secure_asset('images/logo.png') }}">
        <!-- Scripts -->
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/layout.css') }}" rel="stylesheet">
        
    <!-- ローカル環境用 -->
    @else
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
