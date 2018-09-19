<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = { csrfToken: '{{csrf_token()}}' }</script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNkHU-AE_0atL7_OrWfFp-vB6UGZqKXrQ&libraries=places" async defer></script>
    <title>@yield('title')</title>
    <style>
        body{
            margin: 0;
        }
    </style>
</head>
<body>
<div id="app">
    <navbar-app></navbar-app>
    @yield('content')
    <footer-app></footer-app>
</div>
<script src="{{ asset('js/app.js') }}"></script>
@yield('script')
</body>
</html>