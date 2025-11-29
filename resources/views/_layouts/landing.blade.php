<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route("home") }}">Inicio</a></li>
                <li><a href="{{ route("about") }}">Sobre nosotros</a></li>
                <li><a href="{{ route("services") }}">Servicios</a></li>
                <li><a href="{{ route("contact") }}">Contacto</a></li>
            </ul>
        </nav>
        @yield("header")
    </header>
    <main>
        @yield("main")
    </main>
    <footer>
        <small> &copy; Eliseu Laravel DAW2</small>
    </footer>
</body>
</html>