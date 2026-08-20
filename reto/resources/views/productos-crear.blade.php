@extends('layout')

@section('titulo', 'Agregar producto - FERROVA')

@section('content')

<section id="agregar-producto">

    <h2>Agregar nuevo producto</h2>

    <p class="descripcion">Registra un nuevo producto disponible en FERROVA.</p>

    @if ($errors->any())
        <div class="errores">
            <strong>Advertencia:</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('productos.store') }}" method="POST">

        @csrf

        <div class="campo">
            <label for="nombre">Nombre del producto</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" placeholder="Ingrese el nombre del producto" required>
        </div>

        <div class="campo">
            <label for="categoria">Categoría</label>
            <select id="categoria" name="categoria" required>
                <option value="">Seleccione una categoría</option>
                <option value="Herramientas" {{ old('categoria') == 'Herramientas' ? 'selected' : '' }}>Herramientas</option>
                <option value="Herramientas eléctricas" {{ old('categoria') == 'Herramientas eléctricas' ? 'selected' : '' }}>Herramientas eléctricas</option>
                <option value="Construcción" {{ old('categoria') == 'Construcción' ? 'selected' : '' }}>Construcción</option>
                <option value="Pinturas" {{ old('categoria') == 'Pinturas' ? 'selected' : '' }}>Pinturas</option>
                <option value="Plomería" {{ old('categoria') == 'Plomería' ? 'selected' : '' }}>Plomería</option>
                <option value="Material eléctrico" {{ old('categoria') == 'Material eléctrico' ? 'selected' : '' }}>Material eléctrico</option>
                <option value="Fijaciones" {{ old('categoria') == 'Fijaciones' ? 'selected' : '' }}>Fijaciones</option>
            </select>
        </div>

        <div class="campo">
            <label for="precio">Precio (Bs.)</label>
            <input type="number" id="precio" name="precio" value="{{ old('precio') }}" placeholder="Ingrese el precio" min="0" step="0.01" required>
        </div>

        <div class="campo">
            <label for="stock">Cantidad en stock</label>
            <input type="number" id="stock" name="stock" value="{{ old('stock') }}" placeholder="Ingrese la cantidad" min="0" required>
        </div>

        <div class="acciones">
            <button type="submit" class="btn-guardar">Guardar producto</button>
            <a href="{{ route('productos') }}" class="btn-cancelar">Cancelar</a>
        </div>

    </form>

</section>

@endsection