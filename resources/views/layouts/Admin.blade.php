<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{config('app.name')}}</title>
        <!-- Styles -->
        <link href="{{asset('Admin/css/main.07a59de7b920cd76b874.css')}}" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            @yield('content')
        </div>
        @extends('layouts.Footer')
    </body>
  <script src="{{asset('Admin/js/main.07a59de7b920cd76b874.js')}}"></script>
</html>
