<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield("title",'Administration '.config('app.name'))</title>
    <link rel="icon" type="image/png" href="/images/logos/favicon.png" />


    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('/backend/css/admin.css') }}">
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show ">
@include('admin.layout.nav')
<div class="app-body">
    @include("admin.layout.sidebar")
    <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.home') }}">Administration</a>
            </li>
        @yield('breadcrumbs')
        <!-- Breadcrumb Menu-->
            <li class="breadcrumb-menu d-md-down-none">
                <div class="btn-group" role="group" aria-label="Button group">
                    <a class="btn" href="{{ route('admin.home') }}">
                        <i class="fa fa-home"></i>  Administration</a>
                    {{--<a class="btn" href="#">--}}
                        {{--<i class="fa fa-cog"></i>  Paramètres</a>--}}
                    <a class="btn" href="{{ route('home') }}" target="_blank">
                        <i class="fa fa-eye"></i>  Voir le site</a>
                </div>
            </li>
        </ol>
        <div class="container-fluid">
            @yield('content')
        </div>
    </main>
</div>
<script src="{{mix('/backend/js/manifest.js')}}"></script>
<script src="{{mix('/backend/js/vendor.js')}}"></script>
<script src="{{mix('/backend/js/admin.js')}}"></script>
@yield('scripts')
@toastr_render
</body>
</html>
