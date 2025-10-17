@extends('layouts.app')

@section('title', 'Panel')

@section('content')
<main class="page-dashboard">
  <section class="dash-wrapper">
    <div class="dash-card">
      <h1 class="dash-title">¡Bienvenido, {{ Auth::user()->name }}!</h1>

      @if (session('status'))
        <div class="alert" role="alert">{{ session('status') }}</div>
      @endif

      <p class="dash-sub">Usted está conectado.</p>

      <div class="dash-actions">
        <a href="{{ url('products') }}" class="btn">Ver productos</a>
        <a href="{{ route('products.create') }}" class="btn btn--ghost">Crear producto</a>

        <form action="{{ route('logout') }}" method="POST" style="margin-left:auto">
          @csrf
          <button type="submit" class="btn btn--ghost">Cerrar sesión</button>
        </form>
      </div>
    </div>
  </section>
</main>
@endsection
