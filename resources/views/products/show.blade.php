@extends('layouts.app')

@section('title', 'Detalle de productos')

@section('content')
    <main class="page-show">
        <div class="detail-wrapper">
            <article class="detail-card">
                <div class="detail-media">
                    <img src="https://picsum.photos/800/600?random=1" alt="Producto">
                </div>

                <div class="detail-body">
                    <h1 class="detail-title">Audífonos</h1>

                    <p class="detail-meta"><strong>Marca:</strong> Marca X</p>
                    <p class="detail-price">Precio: $120.000</p>

                    <p class="detail-desc">
                        <strong>Descripción:</strong> Este es un producto de ejemplo con detalles ficticios para mostrar el
                        diseño de la vista de detalle.
                    </p>

                    <div class="detail-actions">
                        <a href="{{ route('products.index') }}" class="btn btn--ghost">← Volver al listado</a>
                        <a href="#" class="btn">Añadir al carrito</a>
                    </div>
                </div>
            </article>
        </div>
    </main>
@endsection
