<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('backpack.base.project_name') ?? 'Backpack' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Backpack CSS --}}
    @backpackStyles
    @stack('before_styles')
    @stack('after_styles')

    {{-- Optional Vite assets (for frontend, not admin panel) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>