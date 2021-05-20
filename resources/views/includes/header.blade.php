<header class="header">
  <div class="header__container container">
    <a class="header__logo logo" href="{{ route('home') }}">ColorON</a>
    <nav class="header__menu menu">
      <a class="menu__link link" href="{{ route('price') }}">Цены</a>
      <a class="menu__link link" href="{{ route('comment') }}">Отзывы</a>
      <a class="menu__link link" href="{{ route('order') }}">Записаться</a>
    </nav>
    <div class="header__submenu submenu">
      @guest
      <a class="submenu__link link" href="{{ route('login') }}">Войти</a>
      <a class="submenu__link link" href="{{ route('register') }}">Зарегестрироваться</a>
      @else
      @role('admin')
      {{-- <a class="submenu__link" href="{{ route('admin') }}">Панель администратора</a> --}}
      <a class="submenu__link link" href="{{ route('service') }}">Услуги</a>
      <a class="submenu__link link link--mb" href="{{ route('graph.index') }}">График</a>
      @endrole
      <a class="submenu__link link" href="{{ route('getOrdersForUser', Auth::user()->id) }}">Мои записи</a>
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <input class="submenu__link link" type="submit" value="Выйти">
      </form>
      @endguest
    </div>
    <div class="header__controller">
      <svg class="header__profile profile icon">
        <use href="/img/sprites.svg#profile">
      </svg>
      <button class="header__burger burger">
        <span class="burger__line"></span>
      </button>
    </div>
  </div>
</header>
