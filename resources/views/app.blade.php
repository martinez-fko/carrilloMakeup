<!DOCTYPE html>
<html lang="es-MX">
<head>
    @include('layouts.metas')
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="/images/favicon.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    @include('layouts.navbar')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    @include('layouts.scripts')

</body>
</html>