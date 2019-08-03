<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Notes</title>

        <link rel="stylesheet" href="/css/notes.css">
        <script type="text/x-mathjax-config">MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});</script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/MathJax.js?config=TeX-MML-AM_CHTML' async></script>
    </head>
    <body>
        <div class="position-fixed"><a href="{{$downloadLink}}" class="btn btn-primary" style="position: fixed; top: 20px; left: -4px">Download</a></div>

        <div id="write">
            {!! $content !!}
        </div>
    </body>
</html>