<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/products.css') }}">
</head>
<body>
    <header>
        @yield("header_title")
        @include("_partials.products.nav")
    </header>
    <main>@yield("main")</main>
    @include("_partials.products.footer")
</body>
</html>