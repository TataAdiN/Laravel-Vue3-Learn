<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Application</title>
        <link rel="stylesheet" href="{{ url('modules/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('modules/fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ url('css/style.css') }}">
        <link rel="stylesheet" href="{{ url('css/components.css') }}">
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="main-wrapper main-wrapper-1">
            <div id="app"></div>
        </div>
        @vite('resources/js/app.js')

        <script src="{{ url('modules/jquery.min.js') }}"></script>
        <script src="{{ url('modules/popper.js') }}"></script>
        <script src="{{ url('modules/tooltip.js') }}"></script>
        <script src="{{ url('modules/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ url('modules/moment.min.js') }}"></script>
        <script src="{{ url('js/stisla.js') }}"></script>
        <script src="{{ url('js/scripts.js') }}"></script>
    </body>
</html>
