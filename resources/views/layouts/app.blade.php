<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head prefix="og: http://ogp.me/ns# website: http://ogp.me/ns/website#">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Indiew') }}</title>

    <!-- OGP -->
    <meta name="description"         content="インディーズゲームにはハイクオリティながらも気軽に手が出せる価格帯のゲームが数多くあります。Indiewはそのようなゲームが織り成す景色とともに紹介し、情報共有するサイトです。">
    <meta property="og:title"        content="インディーズゲームで最高の景色を">
    <meta property="og:description"  content="インディーズゲームにはハイクオリティながらも気軽に手が出せる価格帯のゲームが数多くあります。Indiewはそのようなゲームが織り成す景色とともに紹介し、情報共有するサイトです。">
    <meta property="og:type"         content="website">
    <meta property="og:site_name"    content="Indiew">
    <meta property="og:url"          content="https://indiew.com">

    @if(empty($twitter_ogp))
    <meta property="og:image"        content="{{ asset('ogp.jpeg') }}">
    @else
    <meta property="og:image"        content="{{ $article->image }}">
    @endif

    <meta property="og:image:width"  content="1200">
    <meta property="og:image:height" content="630">
    <meta name="twitter:card"        content="summary_large_image">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    @if(app('env') == 'production')
    <!-- Production -->
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ secure_asset('logo.png') }}">
        <!-- Styles -->
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <!-- Google Analytics -->
        @include('layouts.analytics')
    @else
    <!-- Local -->
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('logo.png') }}">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @endif
    
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css"/>

</head>
<body>
    <div id="app">
        @include('layouts.nav')
        <main>
            <!-- flash message -->
            @if (session('flash_message'))
                <div class="flash_message bg-success text-center py-3 my-0">
                    {{ session('flash_message') }}
                </div>
            @endif

            @yield('content')
        </main>
        <footer class="text-center mt-auto p-3 bg-primary">
            <small><a href="{{ route('privacy') }}" class="text-muted text-decoration-none">プライバシーポリシー</a></small>
            <p><small>©️Indiew</small></p>
        </footer>
    </div>
</body>
</html>
