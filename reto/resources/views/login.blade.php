@extends('layout')

@section('titulo', 'Iniciar sesión - FERROVA')

@section('content')

<section class="login-container">

    <div class="login-card">

        <h2>Iniciar sesión</h2>

        <p>Acceso exclusivo para el administrador de FERROVA.</p>

        @if ($errors->any())
            <div class="errores">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">

            @csrf

            <div class="campo">
                <label for="email">Correo electrónico</label>

                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="campo">
                <label for="password">Contraseña</label>

                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">Iniciar sesión</button>

        </form>

    </div>

</section>

@endsection