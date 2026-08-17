@extends('layout')

@section('titulo', 'FERROVA - Ferretería')

@section('content')

    <section id="contacto">

        <h2>Contáctanos</h2>

        <p>
            ¿Tienes alguna consulta sobre nuestros productos o necesitas una cotización?
            Completa el siguiente formulario y nos pondremos en contacto contigo lo antes posible.
        </p>

        <form id="form-contacto" novalidate method="post" action="{{ route('contacto.store') }}">
            @csrf

            <label for="nombre">Nombre completo:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre"
                value="{{ old('nombre') }}" required>

            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" placeholder="ejemplo@correo.com"
                value="{{ old('correo') }}" required>

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" placeholder="Ingrese su teléfono"
                value="{{ old('telefono') }}">

            <label for="asunto">Asunto:</label>
            <select id="asunto" name="asunto">
                <option value="">Seleccione una opción</option>
                <option value="Cotizacion" @selected(old('asunto') === 'Cotizacion')>Solicitar cotización</option>
                <option value="Consulta" @selected(old('asunto') === 'Consulta')>Consulta sobre productos</option>
                <option value="Pedido" @selected(old('asunto') === 'Pedido')>Realizar un pedido</option>
                <option value="Otro" @selected(old('asunto') === 'Otro')>Otro</option>
            </select>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="5" placeholder="Escriba su mensaje..." required>{{ old('mensaje') }}</textarea>

            <button type="submit">Enviar consulta</button>

            @if ($errors->any())
                <p id="aviso-contacto" class="aviso error">
                    {{ $errors->first() }}
                </p>
            @elseif (session('exito'))
                <p id="aviso-contacto" class="aviso exito">
                    {{ session('exito') }}
                </p>
            @else
                <p id="aviso-contacto" class="aviso"></p>
            @endif

        </form>

    </section>

@endsection
