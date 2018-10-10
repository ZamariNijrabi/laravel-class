<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Medicine Management System - @yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="{!! csrf_token() !!}" name="csrf_token"/>


    @if(App::getLocale() == 'en')

        <link href="{{asset('/standard/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
              type="text/css"/>
        <link href="{{asset('/standard/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet"
              type="text/css"/>
        <link href="{{asset('/standard/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"
              type="text/css"/>
        <link href="{{asset('/standard/global/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet"
              type="text/css"/>
        <link href="{{asset('/standard/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}"
              rel="stylesheet"
              type="text/css"/>
        <link href="{{asset('/standard/global/css/components.css')}}" id="style_components" rel="stylesheet"
              type="text/css"/>
        <link href="{{asset('/standard/global/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('/standard/admin/layout/css/layout.css')}}" rel="stylesheet" type="text/css"/>
        @yield('page-level-css')
        <link id="style_color" href="{{asset('/standard/admin/layout/css/themes/darkblue.css')}}" rel="stylesheet"
              type="text/css"/>
        <link href="{{asset('/standard/admin/layout/css/custom.css')}}" rel="stylesheet" type="text/css"/>

    @endif

    {{-- if language is right to left --}}
    @if(App::getLocale() == 'da' || App::getLocale() == 'pa')
        {{-- Monditory css --}}
        <link href="{{asset('rtl/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
              type="text/css"/>
        <link href="{{asset('rtl/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet"
              type="text/css"/>
        <link href="{{asset('rtl/global/plugins/bootstrap/css/bootstrap-rtl.min.css')}}" rel="stylesheet"
              type="text/css"/>
        <link href="{{asset('rtl/global/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('rtl/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css')}}" rel="stylesheet"
              type="text/css"/>

        {{-- Theme level css --}}
        <link href="{{asset('rtl/global/css/components-rtl.css')}}" id="style_components" rel="stylesheet"
              type="text/css"/>
        <link href="{{asset('rtl/global/css/plugins-rtl.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('rtl/admin/layout/css/layout-rtl.css')}}" rel="stylesheet" type="text/css"/>
        <link id="style_color" href="{{asset('rtl/admin/layout/css/themes/darkblue-rtl.css')}}" rel="stylesheet"
              type="text/css"/>
        <link href="{{asset('rtl/admin/layout/css/custom-rtl.css')}}" rel="stylesheet" type="text/css"/>

        {{--Custome css --}}
        <link href="{{asset('css/da-font.css')}}" rel="stylesheet" type="text/css"/>
    @endif

    {{-- Page level css --}}
    @yield('page-level-css')


    <link href="{{asset('css/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/>

</head>
<body class="page-header-fixed">
