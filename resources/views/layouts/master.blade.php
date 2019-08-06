<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
         {{-- MINIFIED --}}
         @if(config('app.env') == 'production')
            {!! SEOMeta::generate(true) !!}
            {!! OpenGraph::generate(true) !!}
            {!! Twitter::generate(true) !!}
         @else
            {!! SEOMeta::generate() !!}
            {!! OpenGraph::generate() !!}
            {!! Twitter::generate() !!}
         @endif
        
        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
        @stack('css')
        @stack('js-top')
    </head>
    <body>
        <div id="app">
            @include('layouts.navbar')
            <div class="container mt-70">
               @yield('content')
            </div>
            {{-- footer --}}
            @include('layouts.footer')
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
        @stack('js')
    </body>
</html>
