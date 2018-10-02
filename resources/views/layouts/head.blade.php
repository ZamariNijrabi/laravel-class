<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('/css/app.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" type="text/css" rel="stylesheet">
    <title>@yield('title')</title>

    @yield('page-level-css')

    {{--  select the application theme  --}}
    @if(env('APP_THEME') == 'white')
        <link href="{{ asset('/css/white.css') }}" type="text/css" rel="stylesheet">
    @else
        <link href="{{ asset('/css/black.css') }}" type="text/css" rel="stylesheet">
    @endif
</head>
<body>
 