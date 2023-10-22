<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo') Madoka</title>

    <style>
        * {
            margin: 0;
            padding: 0;
        }
</style>
</head>
<body>
    {{-- ai aqui a gente enfia os blocos de código--}}
    @yield('body')
    {{-- todas as views que tiverem uma sessão com esse nome vão se enfiar aqui e ser formatadas--}}
    @include('site.layouts._partials.madoimg') {{-- include igual ao PHP normal, copia todo o HTML e cola--}}
</body>
</html>