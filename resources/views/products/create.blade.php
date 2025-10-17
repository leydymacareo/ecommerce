@extends('layouts.app')

@section('title', 'Crear producto')

@section('content')
<main class="page-create">
  <div class="create-wrapper">
    <div class="create-card">
      <h1 class="create-title">Crear un nuevo producto</h1>

      {{-- Formulario solo visual / demo. No envía a ninguna ruta. --}}
      <form class="create-form" onsubmit="return false">
        {{-- Sin @csrf, sin action, sin method --}}

        <div class="field">
          <label for="name">Nombre</label>
          <input type="text" id="name" placeholder="Celular" required>
        </div>

        <div class="field">
          <label for="description">Descripción</label>
          <textarea id="description" rows="4" placeholder="Describe el producto..." required></textarea>
        </div>

        <div class="field">
          <label for="price">Precio</label>
          <input type="number" id="price" step="0.01" placeholder="29.90" required>
        </div>

        <div class="field">
          <label for="image">Imagen (URL)</label>
          <input
            type="url"
            id="image"
            placeholder="https://ejemplo.com/imagen.jpg"
            inputmode="url"
            required
          >
        </div>

        <div class="field">
          <label for="brand">Marca</label>
          <input type="text" id="brand" placeholder="Apple" required>
        </div>

        <div class="create-actions">
          <a href="{{ route('products.index') }}" class="btn btn--ghost">Volver</a>
          <button type="button" class="btn">Guardar (demo)</button>
        </div>
      </form>
    </div>
  </div>
</main>
@endsection
