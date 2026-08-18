@extends('base')

@section('contenido')
    <h2>Catálogo de Libros</h2>
    <p>En Librería Lápiz encontraras lbros para estudiar, aprender y disfrutar de la lectura.</p>
    <p>Hay {{ count($libros) }} libros en el catálogo.</p>
    @if (count($libros) > 0)
        <ul>
            @foreach ($libros as $libro)
                <li>
                    {{ $libro->titulo }} - Bs {{ $libro->precio }}
                </li>
            @endforeach
        </ul>
    @else
        <p>Todavía no hay libros registrados.</p>
    @endif
    <p>Catálogo atendido por Harold Rodrigo Ari Escobar</p>
    <a href="/libros/nuevo">Registrar un nuevo libro</a>
@endsection