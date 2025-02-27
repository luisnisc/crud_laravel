<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Laravel</title>
    </head>
    <body class="bg-body flex items-center justify-center h-screen">
        <div id="welcome_text" class="flex flex-col items-center gap-3">
            <h1 class="text-4xl font-bold text-center text-gray-800">Bienvenido a CrudNisc</h1>
            <p>Un crud para la administracion de proyectos y usuarios</p>
            <a href="{{route('login')}}">
            <button class="bg-botones text-center p-4 text-white rounded-xl">Empezar</button>
            </a>
        </div>
    </body>
</html>
