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
                        <li class="nav-item{{ (request()->is('blog/*') ? ' active' : '') }}">
                            <a class="nav-link" href="/blog">Blog</a>
                        </li>
                        <li class="nav-item{{ (request()->is('about') ? ' active' : '') }}">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        @guest
                            <li class="nav-item{{ (request()->is('login') ? ' active' : '') }}">
                                <a class="nav-link" href="/login">Login</a>
                            </li>
                        @endguest
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Welcome, {{ auth()->user()->name }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="userDropdown">
                                    {{ Form::open(['url' => '/logout', 'method' => 'POST']) }}
                                        <button class="dropdown-item" type="submit">Logout</button>
                                    {{ Form::close() }}
                                </div>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @if (session()->has('alert'))
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{ session('alert') }}
                        </div>
                    @endif

                    @if (session()->has('error'))
                        <div class="alert alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
            </div>

            @yield('container')
        </div>

        <footer>

        </footer>
    </body>
</html>
