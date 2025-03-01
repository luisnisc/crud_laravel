<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Laravel</title>
    </head>
    <body class="bg-body flex items-center justify-center h-screen">
        <div class="absolute top-0 right-0 p-4">
            <x-layouts.lang/>
        </div>
        <div id="welcome_text" class="flex flex-col items-center gap-3">
            <h1 class="text-4xl font-bold text-center text-gray-800">{{__('Bienvenido a CrudNisc')}}</h1>
            <p>{{__('Un crud para la administración de proyectos y usuarios')}}</p>
            <a href="{{route('login')}}">
            <button class="bg-botones text-center p-4 text-white rounded-xl">{{__('Empezar')}}</button>
            </a>
        </div>
    </body>
</html>
