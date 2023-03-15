<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nutricion</title>
        @vite([
            'resources/scss/app.scss',
            'resources/js/app.js'
        ])
    </head>
    <body>
        @include('components.header')
        @include('components.teaser')
        @include('components.nutritionist')
        @include('components.footer')

    </body>
</html>
