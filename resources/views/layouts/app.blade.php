<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi App')</title>
    @yield('css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('layouts.navbar')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')
</body>
</html>
