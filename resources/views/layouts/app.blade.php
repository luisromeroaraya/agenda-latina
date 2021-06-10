<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- SITE WEB MANIFEST -->
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!--carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.theme.css">
</head>

<body class="antialiased bg-blue-300">
    <x-header />
    <main>@yield('content')</main>
    <x-footer />
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script>
        new Glide('.glide', {
            type: 'carousel',
            startAt: 0,
            perView: 1
        }).mount();
        new Glide('.glide_concerts', {
            type: 'carousel',
            startAt: 0,
            perView: 3
        }).mount();
        new Glide('.glide_parties', {
            type: 'carousel',
            startAt: 0,
            perView: 3
        }).mount();
        new Glide('.glide_exhibitions', {
            type: 'carousel',
            startAt: 0,
            perView: 3
        }).mount();
    </script>
</body>

</html>