<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Librería el Lápiz</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Librería el Lápiz</h1>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer>
        Integradora - Harold Rodrigo Ari Escobar - 18 de agosto de 2026
    </footer>
</body>
</html>