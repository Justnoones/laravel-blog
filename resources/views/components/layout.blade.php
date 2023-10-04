<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    @vite('resources/css/app.css')
    <style>
        .radial-bg {
            background: #FFF801;
            background: radial-gradient(at center, #fbff007e,  #FFF801);
        }
    </style>
</head>
<body class="bg-yellow-300 ">

    <div class="px-5 py-2 gap-4 space-y-10">
        <x-nav />
        {{$slot}}
    </div>
</body>
</html>
