<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield("title",'Administration '.config('app.name'))</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('/backend/css/admin.css') }}">
</head>
<body>
<div class="h-100 app">
    @yield('content')
</div>

<script src="{{mix('/backend/js/manifest.js')}}"></script>
<script src="{{mix('/backend/js/vendor.js')}}"></script>
<script src="{{mix('/backend/js/admin.js')}}"></script>

@yield('scripts')
@toastr_render
</body>
</html>
