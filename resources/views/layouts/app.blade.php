<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Fonts -->
    <link rel="shortcut icon" type="image/png" href="{{asset('img/favicon.png')}}">
        <!-- Styles -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/icofont.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{asset('css/appp.css')}}" rel="stylesheet">
        <!-- endinject -->
        <!-- plugin css for this page -->
    </head>
    <body>
        <div class="container">
            @extends('layouts.Nav')
        </div>
        <div class="container mt-5">
            @yield('content')
        </div>
    </body>

</html>