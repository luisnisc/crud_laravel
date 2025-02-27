<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite (["resources/css/app.css","resources/js/app.js"])
</head>

<x-layouts.header/>
<body class="bg-body flex flex-col items-center  h-screen">
    <main>
        {{$slot}}
    </main>
</body>
</html>