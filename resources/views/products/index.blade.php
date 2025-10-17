@extends('layouts.app')

@section('title', 'Lista de productos')

@section('content')
<main class="page-index">
  <header class="index-hero">
    <h1 class="hero-title">Lista de productos</h1>
    <p class="hero-sub">Explora nuestras novedades</p>
  </header>

  <div class="index-container">
    <section class="product-grid">
      <!-- Producto 1 -->
      <article class="product-card">
        <div class="card-media">
          <img src="https://picsum.photos/600/400?random=1" alt="Audífonos Bluetooth">
        </div>
        <div class="card-body">
          <h3 class="card-title">Audífonos Bluetooth</h3>
          <p class="card-price">$120.000</p>
          <p class="card-meta">Categoría: Electrónica</p>
        </div>
        <div class="card-actions">
          <a href="{{ url('products/1') }}" class="btn btn--block">Ver detalle</a>
        </div>
      </article>

      <!-- Producto 2 -->
      <article class="product-card">
        <div class="card-media">
          <img src="https://picsum.photos/600/400?random=2" alt="Cámara Digital">
        </div>
        <div class="card-body">
          <h3 class="card-title">Cámara Digital</h3>
          <p class="card-price">$450.000</p>
          <p class="card-meta">Categoría: Fotografía</p>
        </div>
        <div class="card-actions">
          <a href="{{ url('products/2') }}" class="btn btn--block">Ver detalle</a>
        </div>
      </article>

      <!-- Producto 3 -->
      <article class="product-card">
        <div class="card-media">
          <img src="https://picsum.photos/600/400?random=3" alt="Reloj Smartwatch">
        </div>
        <div class="card-body">
          <h3 class="card-title">Reloj Smartwatch</h3>
          <p class="card-price">$300.000</p>
          <p class="card-meta">Categoría: Accesorios</p>
        </div>
        <div class="card-actions">
          <a href="{{ url('products/3') }}" class="btn btn--block">Ver detalle</a>
        </div>
      </article>

      <!-- Producto 4 -->
      <article class="product-card">
        <div class="card-media">
          <img src="https://picsum.photos/600/400?random=4" alt="Mochila Casual">
        </div>
        <div class="card-body">
          <h3 class="card-title">Mochila Casual</h3>
          <p class="card-price">$90.000</p>
          <p class="card-meta">Categoría: Moda</p>
        </div>
        <div class="card-actions">
          <a href="{{ url('products/4') }}" class="btn btn--block">Ver detalle</a>
        </div>
      </article>
    </section>
  </div>
</main>
@endsection