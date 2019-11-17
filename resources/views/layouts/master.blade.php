<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') - {{ config('app.name') }}</title>

        {{-- Inline styling for loader to prevent the need for an HTTP request --}}
        <style>#loader{z-index:10000;position:fixed;width:100vw;height:100vh;top:0;left:0;background-color:#fff}@keyframes hideshow{0%{opacity:1}50%{opacity:0}0%{opacity:1}}#path30{animation:hideshow 1s ease infinite}.loader-logo{position:fixed;top:50%;left:50%;width:50em;max-width:100%;height:18em;transform:translate(-50%,-50%)}</style>
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

        <section id="loader">
            <!-- Realtime logo -->
            <svg class="loader-logo" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 306.66666 117.01333" height="117.01333" width="306.66666" xml:space="preserve" id="svg2" version="1.1"><metadata id="metadata8"><rdf:RDF><cc:Work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage" /></cc:Work></rdf:RDF></metadata><defs id="defs6" /><g transform="matrix(1.3333333,0,0,-1.3333333,0,117.01333)" id="g10"><g transform="scale(0.1)" id="g12"><path id="path14" style="fill:#0f0e0d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 364.539,561.074 h 168.172 c 2.641,0.305 39.594,-5.656 38.387,-40.043 0,0 2.113,-16.289 -14.481,-16.289 -13.722,0 -14.781,14.481 -14.781,14.481 0,10.707 -9.352,12.062 -9.352,12.062 H 364.16 c -6.031,0 -7.351,-5.918 -7.351,-5.918 l -0.114,-17.308 h 72.625 c 123.176,-0.301 143.086,-66.266 142.078,-67.571 -0.429,-0.558 2.95,-15.304 -13.875,-15.082 -23.125,0.301 -18.097,48.965 -117.796,53.09 l -82.883,0.152 v -38.687 c 0,0 -0.024,-14.027 -14.477,-14.027 -14.707,0 -14.554,12.515 -14.554,12.515 l 0.148,86.653 c 5.531,36.148 36.578,35.972 36.578,35.972" /><path id="path16" style="fill:#0f0e0d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 655.262,492.07 c -13.426,0 -12.008,-10.476 -12.008,-10.476 l -0.156,-26.254 c 0,0 2.507,-27.973 30.527,-29.59 l 160.988,0.078 c 0,0 11.575,0.633 11.575,11.496 0,12.063 -11.442,11.61 -11.442,11.61 l -160.5,0.113 c 0,0 -7.523,-0.113 -7.523,5.617 l 0.14,14.035 h 162.7 c 0,0 11.183,-0.008 11.183,11.34 0,12.332 -11.34,11.965 -11.34,11.965 z m -12.145,31.149 c 0,12.367 11.465,11.687 11.465,11.687 l 180.77,0.074 c 0,0 10.933,0.079 10.933,-11.535 0,-11.312 -10.933,-11.84 -10.933,-11.84 H 654.508 c 0,0 -11.391,0.075 -11.391,11.614" /><path id="path18" style="fill:#0f0e0d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 981.656,486.566 53.464,-0.074 -18.85,24.887 c 0,0 -3.62,4.523 -8.07,4.523 -4.3,0 -7.99,-4.523 -7.99,-4.523 z m 51.204,42.235 63.88,-85.449 c 2.13,-3.192 4.94,-8.332 -1.96,-15.235 -7.02,-7.012 -14.43,-1.582 -17.2,1.738 l -29.36,39.29 h -80.24 l -30.972,-40.801 c -2.563,-2.938 -9.352,-6.106 -15.61,0.152 -6.449,6.449 -5.203,11.012 -3.089,13.902 l 66.683,88.551 c 4.535,5.242 13.457,9.387 23.208,9.387 17.2,0 24.66,-11.535 24.66,-11.535" /><path id="path20" style="fill:#0f0e0d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 1181.88,534.906 c 11.09,0 11.69,-10.633 11.69,-10.633 l -0.08,-67.343 c 0.98,-5.731 2.57,-6.789 8.9,-8.071 0.23,-0.046 155.66,-0.074 155.66,-0.074 0,0 8.82,-0.23 8.82,-11.84 0,-10.183 -8.82,-10.789 -8.82,-10.789 0,0 -158.3,0.063 -158.52,0.078 -24.96,1.883 -28.37,18.157 -29.19,28.282 l -0.15,71.418 c 0,0 0.08,8.972 11.69,8.972" /><path id="path22" style="fill:#0f0e0d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 1495.53,532.27 c -18.17,-12.446 -31.82,-33.262 -31.82,-33.262 l -39.67,-60.18 c 0,0 -2.11,-1.883 -2.04,-6.789 0.04,-2.512 -0.53,-6.105 8,-6.105 0,0 12.14,-1.887 24.35,14.554 l 44.42,65.157 c 0,0 21.04,24.964 44.57,26.773 l 65.69,-0.074 c 13.95,1.207 26.17,13.914 26.17,22.547 0,7.39 -7.69,6.562 -7.69,6.562 l -216.37,0.074 c -2.49,1.434 -27.15,-7.089 -27.15,-23.3 0,-6.188 6.94,-6.036 6.94,-6.036 l 104.6,0.079" /><path id="path24" style="fill:#0f0e0d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 1680.13,525.109 c -16.85,-22.203 -57.45,-88.468 -59.83,-94.097 -0.69,-1.653 -0.26,-5.231 6.14,-5.282 14.04,-0.113 19.92,11.442 19.92,11.442 0,0 47.06,68.25 58.97,92.305 0.96,1.921 0.83,5.918 -6.21,5.918 -9.92,0 -15.73,-5.985 -18.99,-10.286" /><path id="path26" style="fill:#0f0e0d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 1786.61,503.727 c 1.54,-0.063 17.05,-70.696 17.05,-70.696 0,0 1.13,-7.031 12.92,-7.031 13.42,0 21.09,5.574 21.09,5.574 0,0 110.94,73.043 111.98,71.746 1.05,-1.285 -42.98,-67.621 -42.98,-67.621 -4.68,-8.164 2.43,-9.699 4.45,-9.699 11.23,0 18.74,9.453 18.74,9.453 l 51.39,78.453 c 10.88,17.535 -2.29,21.086 -6.87,21.086 -14.32,0 -26.93,-10.097 -26.93,-10.097 L 1845,458.285 c 0,0 -9.21,-7.156 -12.93,-1.34 l -15.24,66.09 c 0,0 -0.49,11.473 -13.25,11.797 -17.37,0.438 -33.29,-18.664 -33.29,-18.664 0,0 -49.83,-74.188 -53,-79.902 -4.85,-8.731 1.21,-10.68 4.03,-10.559 12.61,0.535 16.65,7.648 16.65,7.648 0,0 46.54,70.454 48.64,70.372" /><path id="path28" style="fill:#0f0e0d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 2033.54,484.227 -20.36,-31.297 c -12,-27.071 11.01,-26.996 11.01,-26.996 h 162.06 c 18.78,1.582 21.87,16.968 21.87,18.097 0,1.942 -0.15,4.602 -6.03,4.903 l -162.22,0.3 c -2.33,0.758 -2.79,2.039 -2.19,5.887 l 9.21,13.723 h 162.97 c 14.63,0.601 20.74,14.328 20.74,17.648 0,2.117 0.83,4.899 -5.81,5.578 h -171.95 c -14.48,-0.3 -19.3,-7.843 -19.3,-7.843 z m 44.63,50.664 h 180.76 c 6.37,-0.797 5.66,-5.039 5.66,-5.039 0,0 -2.3,-15.125 -20.41,-18.2 l -181.39,-0.199 c -6.02,0.18 -6.02,5.129 -6.02,5.129 0,0 1.97,13.898 21.4,18.309" /><path id="path30" style="fill:#eb124e;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 130.602,406.629 c 0,0 -70.9653,2.988 -70.9653,62.742 0,57.895 68.9293,61.766 68.9293,61.766 h 82.278 l -0.078,-78.735 H 189.5 l 0.074,58.219 H 123.59 c 0,0 -38.6134,-2.461 -38.6134,-42.305 0,-43.015 43.0624,-41.929 43.0624,-41.929 H 247.191 V 561.453 H 127.059 c 0,0 -103.9926,-5.129 -103.9926,-95.023 0,-92.91 109.1176,-90.196 109.1176,-90.196 L 2266.8,382.27 Z m 27.527,80.312 0.074,-35.066 -22.625,0.078 c 0,0 -16.969,2.863 -16.969,17.344 0,14.781 16.821,17.644 16.821,17.644 h 22.699" /></g></g></svg></section>
    </body>
</html>
