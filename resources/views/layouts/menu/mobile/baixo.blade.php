<div id="navbar" class="navbar-collapse nav-bottom" remove-pc="">
  <ul class="nav navbar-right center">

      <li><a onClick="openNavMobile();">
          <i class="button fa fa-bars fa-2x fa-mobile-3x" aria-hidden="true"></i><p>Menu</p>
      </a></li>

      @yield('conteudo.menu.mobile.baixo')

      <li><a href="/dashboard/perfil/{{ @Auth::user()->id }}">
        <i class="button fa fa-user fa-2x fa-mobile-3x" aria-hidden="true"></i><p>Perfil</p>
    </a></li>

  </ul>
</div>