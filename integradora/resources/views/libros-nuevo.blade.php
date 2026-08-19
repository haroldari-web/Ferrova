@extends('base')

@section('contenido')
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <h2>Registrar libro</h2>

    <form action="/libros/nuevo" method="POST">
        @csrf
        <div>
            <label for="titulo">Título del libro</label>
            <input type="text" id="titulo" name="titulo">
        </div>
        <div>
            <label for="precio">Precio en Bs</label>
            <input type="number" id="precio" name="precio">
        </div>
        <button type="submit"> Registrar libro</button>
    </form>

    <p><a href="/libros">Volver al catálogo</a></p>
@endsection