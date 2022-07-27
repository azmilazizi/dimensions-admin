<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">

    <title>
        @hasSection ('title')
        @yield('title')
        @else
        {{ config('app.name', 'Laravel') }}
        @endif
    </title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('styles')

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script>
        if (localStorage.getItem('dark-mode') == 'true' || !('dark-mode' in localStorage)) {
            document.querySelector('html').classList.add('dark');
        } else {
            document.querySelector('html').classList.remove('dark');
        }
    </script>
</head>

<body>
    <div class="font-sans antialiased text-gray-200">
        {{ $slot }}
    </div>

    @yield('scripts')
</body>

</html>
