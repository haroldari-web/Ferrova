@extends('layout')

@section('titulo', 'FERROVA - Ferretería')

@section('content')

    <section id="productos">

        <div class="encabezado-productos">

            <h2>Nuestros productos</h2>

            <a href="{{ route('productos.create') }}" class="btn-agregar">+ Agregar producto</a>

        </div>

        <div class="productos-grid">

            @forelse ($productos as $producto)

                <article class="producto-card">

                    <div class="producto-info">

                        <h3>{{ $producto->nombre }}</h3>

                        <p class="categoria">{{ $producto->categoria }}</p>
                        <p class="precio">Bs. {{ number_format($producto->precio, 2) }}</p>
                        <p class="stock">Stock: {{ $producto->stock }}</p>

                    </div>

                </article>

            @empty

                <p class="sin-productos">No hay productos disponibles en este momento.</p>

            @endforelse

        </div>

    </section>

@endsection
