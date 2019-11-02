<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') - {{ config('app.name') }}</title>

        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        @stack('styles')

        <script type="text/javascript" src="{{ asset('/js/app.js') }}" defer></script>
        @stack('scripts')
    </head>
    <body>
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">Hanze HBO-ICT <span class="d-none d-sm-none d-md-inline">(student portal)</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item{{ (request()->is('/') ? ' active' : '') }}">
                            <a class="nav-link" href="/">Resources <span class="sr-only">(current)</span></a>
                        </li>
{{--                        <li class="nav-item{{ (request()->is('about') ? ' active' : '') }}">--}}
{{--                            <a class="nav-link" href="/about">About</a>--}}
{{--                        </li>--}}
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            @yield('container')
        </div>
    </body>
</html>
