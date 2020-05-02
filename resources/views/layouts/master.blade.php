<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="google-site-verification" content="AY_zW90WQDMzg72Wc-b2whZDKnEo2EjZfB_G0nnqTgA" />

        {!! SEOMeta::generate(true) !!}
        {!! OpenGraph::generate(true) !!}
        {!! Twitter::generate(true) !!}

        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        {{-- @toastr_css --}}
        @stack('css')
        @stack('js-top')

        @if(config('adsense.enabled'))
            <script data-ad-client="ca-pub-5207069007168829" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        @endif
        
    </head>
    <body>
        <div id="app">
            @include('layouts.navbar')
            <div class="container mt-70">
                @yield('main_title')
                @include('layouts.vultr')
                @include('layouts.inspire')
               @yield('content')
               @include('adsense.square')
            </div>
            {{-- footer --}}
            @include('layouts.footer')
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
        {{-- @toastr_js --}}
        @toastr_render
        @stack('js')
    </body>
</html>
