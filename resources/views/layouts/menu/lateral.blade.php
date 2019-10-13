<div>
  <div id="menu-mySidenav" class="menu-sidenav">
  <div class="center-img" onclick="window.location.href = '/dashboard/perfil';" style="cursor: pointer;">
    <br/>
    <img class="menu-foto img-circle text-center" src="{{ asset('img/perfil.png') }}" alt="Avatar." width="50%" />
    <br/>
    <h4>{{@Auth::user()->name}}</h4>
    <br/>
  </div>
    <a href="/dashboard">
      <i class="fa fa-home " aria-hidden="true"></i><span>Home</span>
    </a>

    @yield('conteudo.menu.lateral')

    <a href="/dashboard/perfil">
      <i class="fa fa-user " aria-hidden="true"></i><span>Perfil</span>
    </a>

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