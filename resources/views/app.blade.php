<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Application</title>
        <link rel="stylesheet" href="{{ url('argon/css/nucleo-icons.css') }}">
        <link rel="stylesheet" href="{{ url('argon/css/nucleo-svg.css') }}">
        <link rel="stylesheet" href="{{ url('argon/css/style.css') }}">
        @vite('resources/css/app.css')
    </head>
    <body>
        <div id="app"></div>
        @vite('resources/js/app.js')
    </body>
</html>
