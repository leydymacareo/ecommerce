<header class="site-header">
  <div class="site-header__inner">
    <!-- Título con look degradado -->
    <a href="{{ url('/') }}" class="site-header__title" aria-label="Ir al inicio">Tecnología</a>

    <!-- Buscador: usa ambas clases para layout + centrado del placeholder -->
    <form class="site-header__search site-search" action="#" method="GET" role="search">
      <input
        type="text"
        name="q"
        placeholder="Buscar productos..."
        autocomplete="off"
      >
      {{-- si más adelante quieres un botón de buscar, puedes poner:
      <button class="btn btn--ghost" type="submit">Buscar</button> --}}
    </form>

    <!-- Zona auth + carrito a la derecha -->
    <div class="auth">
      @guest
        @if (Route::has('login'))
          <a href="{{ route('login') }}" class="btn btn--ghost">Iniciar sesión</a>
        @endif
        @if (Route::has('register'))
          <a href="{{ route('register') }}" class="btn">Registrarse</a>
        @endif

        <a href="{{ route('admin.index') }}" class="btn btn--ghost">Admin</a>

      @else
        <span class="user">{{ Auth::user()->name }}</span>
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit" class="btn btn--ghost">Cerrar sesión</button>
        </form>
      @endguest

      <!-- Carrito con color diferenciado -->
      <a href="#" class="btn btn--cart" aria-label="Ver carrito">🛒</a>
    </div>
  </div>
</header>
