<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel @yield('title', 'Boolean Express Expeditions')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/5da565da38.js" crossorigin="anonymous"></script>

</head>

<body>

    @include('partials.header')

    <main>
        @yield('content')
    </main>
    
    @include('partials.footer')

</body>

</html>