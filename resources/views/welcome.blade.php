<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="shortcut icon" href="{{ asset('img/favicon.gif') }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}"> 

        <title>BobongMD - Official Page</title>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        
        <style>
            body{
                background: url("img/bg2.png") no-repeat;
                background-position: center;
                background-attachment: fixed;
                background-size: cover;
                background-color: #feebeb;
            }
        </style>
    </head>
    <body>
        <div id="app">
            
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
