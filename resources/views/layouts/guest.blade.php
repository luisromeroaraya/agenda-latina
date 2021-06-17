<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Agenda Latina') }}</title>
    <!-- SITE WEB MANIFEST -->
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <!-- FONTS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <!-- CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.theme.css">
</head>

<body class="antialiased">
    @include('components.header')
    <main>{{ $slot }}</main>
    @include('components.footer')
    <!-- Scripts -->
    @include('components.script')
</body>

</html>