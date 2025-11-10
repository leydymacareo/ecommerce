@extends('layouts.app')

@section('title', 'Lista de productos')

@section('content')
    <main class="page-index">
        <header class="index-hero">
            <h1 class="hero-title">Lista de productos</h1>
            <p class="hero-sub">Explora nuestras novedades</p>
        </header>

        <div class="index-container">
            <section class="filter-bar">
                <form method="GET" action="{{ route('products.index') }}" class="filter-form">
                    <label for="category" class="sr-only">Categoría</label>
                    <select id="category" name="category" class="filter-select">
                        <option value="">Todas las categorías</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ (string) $currentCategory === (string) $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn">Filtrar</button>
                    @if ($currentCategory)
                        <a href="{{ route('products.index') }}" class="btn btn--ghost">Limpiar</a>
                    @endif
                </form>
            </section>

            <section class="product-grid">
                @forelse ($products as $product)
                    <article class="product-card">
                        <div class="card-media">
                            <img src="https://picsum.photos/600/400?random={{ $product->id }}" alt="{{ $product->name }}">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">{{ $product->name }}</h3>
                            <p class="card-price">${{ number_format($product->price, 0, ',', '.') }}</p>
                            <p class="card-meta">
                                Categoría: {{ $product->category->name ?? 'Sin categoría' }}
                                @if ($product->brand)
                                    <span class="card-meta__brand">• {{ $product->brand->name }}</span>
                                @endif
                            </p>
                            <p class="card-description">
                                {{ \Illuminate\Support\Str::limit($product->description, 90) }}
                            </p>
                        </div>
                        <div class="card-actions">
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn--block">Ver detalle</a>
                        </div>
                    </article>
                @empty
                    <div class="product-empty">
                        <p>No hay productos para mostrar en este momento.</p>
                    </div>
                @endforelse
            </section>

            <div class="pagination-wrapper">
                {{ $products->links() }}
            </div>
        </div>
    </main>
@endsection
