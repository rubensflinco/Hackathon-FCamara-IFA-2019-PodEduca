<div>

  @extends('layouts.menu.lateral')
  @section('conteudo.menu.lateral')
    <a href="/">
      <i class="fa fa-home " aria-hidden="true"></i><span>Home</span>
    </a>
    <a href="/">
      <i class="fa fa-users " aria-hidden="true"></i><span>Turma</span>
    </a>
    <a href="/">
      <i class="fa fa-flag-checkered " aria-hidden="true"></i><span>Missões</span>
    </a>
    <a href="/">
      <i class="fa fa-fire " aria-hidden="true"></i><span>Poderes</span>
    </a>
    <a href="/">
      <i class="fa fa-user " aria-hidden="true"></i><span>Conta</span>
    </a>
  @endsection

  <nav class="navbar navbar-gradient navbar-top scrolled navbar-fixed-top">
    <div class="container">
      @extends('layouts.menu.desktop.cima')

      @extends('layouts.menu.mobile.baixo')
      @section('conteudo.menu.mobile.baixo')
        <li><a href="/conta">
            <i class="button fa fa-user fa-2x fa-mobile-3x" aria-hidden="true"></i><p>Conta</p>
        </a></li>
      @endsection

    </div>
  </nav>
</div>