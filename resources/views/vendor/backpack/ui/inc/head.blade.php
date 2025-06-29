<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token for AJAX security -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Backpack') }}</title>

    <!-- Backpack CSS and JS assets -->
    @backpackAssets

    <!-- Optional: Your custom styles -->
    @stack('styles')
</head>
<body>
    @yield('content')

    <!-- Optional: Your custom scripts -->
    @stack('scripts')
</body>
</html>
