@extends('layouts.app')

@section('title', 'Iniciar sesión')

@section('content')
<main class="page-auth">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-7 col-md-9">

        <div class="auth-card">
          <h1 class="auth-title">Iniciar sesión</h1>

          <form method="POST" action="{{ route('login') }}" class="auth-form">
            @csrf

            <div class="field mb-3 row">
              <label for="email" class="col-md-4 col-form-label text-md-end">Correo electrónico</label>
              <div class="col-md-8">
                <input id="email" type="email"
                       class="form-control @error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
              </div>
            </div>

            <div class="field mb-3 row">
              <label for="password" class="col-md-4 col-form-label text-md-end">Contraseña</label>
              <div class="col-md-8">
                <input id="password" type="password"
                       class="form-control @error('password') is-invalid @enderror"
                       name="password" required autocomplete="current-password">
                @error('password')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
              </div>
            </div>

            <div class="mb-3 row">
              <div class="col-md-8 offset-md-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember"
                         {{ old('remember') ? 'checked' : '' }}>
                  <label class="form-check-label" for="remember">Mantener sesión activa</label>
                </div>
              </div>
            </div>

            <div class="auth-actions">
              <a href="{{ url()->previous() }}" class="btn btn--ghost">Volver</a>

              <div class="auth-actions__right">
                @if (Route::has('password.request'))
                  <a class="btn btn--ghost" href="{{ route('password.request') }}">¿Olvidó su contraseña?</a>
                @endif
                <button type="submit" class="btn">Iniciar sesión</button>
              </div>
            </div>
          </form>
        </div><!-- /.auth-card -->

      </div>
    </div>
  </div>
</main>
@endsection
