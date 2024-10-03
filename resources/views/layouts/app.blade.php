<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Latihan Laravel')</title>
    @yield('head')
</head>
<body>

    @include('partials.header')

    @yield('content')

    @include('partials.footer')
    
</body>
</html>