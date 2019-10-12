<div>
  <div id="menu-mySidenav" class="menu-sidenav">
  {{-- <img class="menu-foto" src="/assets/img/topoMenu.png" alt="Logotipo com o wallpaper do aplicativo." /> --}}

    <a href="/dashboard">
      <i class="fa fa-home " aria-hidden="true"></i><span>Home</span>
    </a>

    @yield('conteudo.menu.lateral')

    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
      <i class="fa fa-sign-out " aria-hidden="true"></i><span>Sair</span>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <button class="closebtn">
      <i class="fa fa-arrow-left" aria-hidden="true"></i>
    </button>
  </div >
  <div id="menu-mySidenav-backdrop"></div>
</div>