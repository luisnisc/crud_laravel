<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'Título por defecto' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header class="bg-white dark:bg-gray-800 shadow">
            {{ $header }}
        </header>

        <main class="min-h-screen bg-gray-100 dark:bg-gray-900"> 
            {{ $slot }}
        </main>
    </body>
</html>