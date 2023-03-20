<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('pagename', 'Nutre tu Ser') | Nutricion</title>

        @vite([
            'resources/scss/app.scss',
            'resources/js/app.js'
        ])
    </head>
    <body class="@yield('bodyclass', '')">
        @include('components.header')
        @yield('content')
        @include('components.footer')
    </body>
</html>
