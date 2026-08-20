<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'FERROVA - Ferretería')</title>

    <link rel="icon" type="image/png" href="{{ asset('imgs/Icono.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

    <header>

        <h1>FERROVA</h1>
        <p>Tu ferretería de confianza</p>
        <button type="button" id="btn-tema" class="btn-modo">☀️ Modo Día</button>

    </header>

    <nav>

        <button type="button" id="btn-menu" class="hamburguesa"><i class="fa-solid fa-bars"></i> Menú</button>

        <ul>
            <li><a href="{{ url('/') }}"><i class="fa-solid fa-house"></i> Inicio</a></li>
            <li><a href="{{ url('/productos') }}"><i class="fa-solid fa-cart-shopping"></i> Productos</a></li>
            <li><a href="{{ url('/contacto') }}"><i class="fa-solid fa-envelope"></i> Contacto</a></li>
            @auth
            <li><a href="{{ route('panel') }}"><i class="fa-solid fa-table-columns"></i> Panel</a></li>
            <li><form action="{{ route('logout') }}" method="POST">@csrf<button type="submit" class="btn-logout"><i class="fa-solid fa-right-from-bracket"></i> Cerrar sesión</button></form></li>
            @else
            <li><a href="{{ route('login') }}"><i class="fa-solid fa-right-to-bracket"></i> Iniciar sesión</a></li>
            @endauth
        </ul>

    </nav>

    <main>
        @yield('content')
    </main>

    <footer>

        <p>&copy; {{ date('Y') }} FERROVA - Todos los derechos reservados.</p>
        <p>Desarrollado por Harold Rodrigo Ari Escobar.</p>

    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
