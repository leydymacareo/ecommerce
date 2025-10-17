@extends('layouts.app')

@section('title', 'Registrarse')

@section('content')
<main class="page-auth">
  <section class="auth-card">
    <h1 class="auth-title">Crear cuenta</h1>

    <form method="POST" action="{{ route('register') }}" class="auth-form" novalidate>
      @csrf

      {{-- Nombre --}}
      <div class="row mb-3 align-items-center">
        <label for="name" class="col-md-4 col-form-label text-md-end">Nombre</label>
        <div class="col-md-8">
          <input
            id="name"
            type="text"
            name="name"
            value="{{ old('name') }}"
            class="form-control @error('name') is-invalid @enderror"
            required autofocus
            placeholder="Tu nombre"
          >
          @error('name')
            <span class="invalid-feedback d-block" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </div>

      {{-- Email --}}
      <div class="row mb-3 align-items-center">
        <label for="email" class="col-md-4 col-form-label text-md-end">Correo electrónico</label>
        <div class="col-md-8">
          <input
            id="email"
            type="email"
            name="email"
            value="{{ old('email') }}"
            class="form-control @error('email') is-invalid @enderror"
            required autocomplete="email"
            placeholder="tucorreo@ejemplo.com"
          >
          @error('email')
            <span class="invalid-feedback d-block" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </div>

      {{-- Password --}}
      <div class="row mb-3 align-items-center">
        <label for="password" class="col-md-4 col-form-label text-md-end">Contraseña</label>
        <div class="col-md-8">
          <input
            id="password"
            type="password"
            name="password"
            class="form-control @error('password') is-invalid @enderror"
            required autocomplete="new-password"
            placeholder="Mínimo 8 caracteres"
          >
          @error('password')
            <span class="invalid-feedback d-block" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </div>

      {{-- Confirmación --}}
      <div class="row mb-4 align-items-center">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirmar contraseña</label>
        <div class="col-md-8">
          <input
            id="password-confirm"
            type="password"
            name="password_confirmation"
            class="form-control"
            required autocomplete="new-password"
            placeholder="Repite tu contraseña"
          >
        </div>
      </div>

      {{-- Acciones --}}
      <div class="auth-actions">
        <a href="{{ route('login') }}" class="btn btn--ghost">Ya tengo cuenta</a>
        <div class="auth-actions__right">
          <button type="submit" class="btn">Registrarse</button>
        </div>
      </div>
    </form>
  </section>
</main>
@endsection
