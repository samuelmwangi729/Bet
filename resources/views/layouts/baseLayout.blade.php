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
        <link href="{{asset('css/app1.css')}}" rel="stylesheet">
        <link href="{{asset('css/appp.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}">
        <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <link rel="stylesheet" href="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <!-- endinject -->
        <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
        <!-- Scripts -->
    </head>
    <body>
        @extends('layouts.Nav')
        @yield('content')
        @extends('layouts.Footer')
    </body>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/app1.js')}}"></script>
<script src="{{ asset('js/appp.js') }}" defer></script>

  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('js/off-canvas.js')}}"></script>
  <script src="{{asset('js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('js/template.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('js/dashboard.js')}}"></script>
  <script src="{{asset('js/data-table.js')}}"></script>
  <script src="{{asset('js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('js/dataTables.bootstrap4.js')}}"></script>
</html>
