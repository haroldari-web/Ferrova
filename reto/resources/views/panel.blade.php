@extends('layout')

@section('titulo', 'Panel de administración - FERROVA')

@section('content')

<section id="panel">

    <div class="panel-header">

        <div>
            <h2>Panel de administración</h2>

            <p>Solicitudes recibidas mediante el formulario de contacto.</p>
        </div>

        <div class="administrador">
            Administrador:
            <strong>{{ Auth::user()->name }}</strong>
        </div>

    </div>


    <div class="tabla-contenedor">

        <table>

            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Asunto</th>
                    <th>Mensaje</th>
                    <th>Fecha</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($solicitudes as $solicitud)

                    <tr>
                        <td>{{ $solicitud->nombre }}</td>
                        <td>{{ $solicitud->correo }}</td>
                        <td>{{ $solicitud->telefono }}</td>
                        <td>{{ $solicitud->asunto }}</td>
                        <td class="mensaje">{{ $solicitud->mensaje }}</td>
                        <td>{{ $solicitud->fecha }}</td>
                    </tr>

                @empty

                    <tr>

                        <td colspan="7" class="sin-solicitudes">No se han recibido solicitudes.</td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</section>

@endsection