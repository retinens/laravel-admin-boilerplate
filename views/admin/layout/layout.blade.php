<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! app('seotools')->generate() !!}
    <link rel="icon" type="image/png" href="/images/logos/favicon.png" />
    <!-- Styles -->
    <link href="{{ mix('backend/css/admin.css') }}" rel="stylesheet">
</head>
<body class="c-app">
@include("admin.layout.sidebar")
<div class="c-wrapper">
    @include('admin.layout.header')
    <div class="c-body">
        <main class="c-main">
            <!-- Breadcrumb-->
            <div class="container-fluid">
                <div id="ui-view">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
    <footer class="c-footer">
        <div class="ml-auto">
            <span>Made by</span>
            <a href="https://retinens.be">RETINENS</a>
        </div>
    </footer>
</div>
<script src="{{ mix('backend/js/manifest.js') }}" ></script>
<script src="{{ mix('backend/js/vendor.js') }}" ></script>
<script src="{{ mix('backend/js/admin.js') }}" ></script>
@yield('scripts')
@toastr_render
</body>
</html>
