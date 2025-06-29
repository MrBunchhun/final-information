<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <title>@yield('title', 'Admin Panel')</title>

    {{-- Add your Vite assets here --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Backpack CSS --}}
    <link rel="stylesheet" href="{{ asset('vendor/backpack/base/css/style.css') }}">
</head>
<body>
    @yield('content')

    {{-- Backpack JS --}}
    <script src="{{ asset('vendor/backpack/base/js/app.js') }}"></script>
</body>
</html>
