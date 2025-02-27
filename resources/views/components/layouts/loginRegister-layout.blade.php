<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$titulo ?? ""}}</title>
    @vite (["resources/css/app.css","resources/js/app.js"])
</head>
<body class="bg-body flex items-center justify-center h-screen">
<main class="bg-main flex justify-center items-center  flex-col">
    <div class="w-full max-w-md">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-center text-2xl font-bold mb-6">{{$titulo ?? ""}}</h2>
            {{$formSlot}}
        </div>
        <div class="text-center mt-4">
            {{$linkSlot}}
        </div>
    </div>
</main>
</body>
</html>
