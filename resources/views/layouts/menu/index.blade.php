<div>

  @extends('layouts.menu.lateral')
  @section('conteudo.menu.lateral')
  @switch(Auth::user()->grupo)
      @case("admin")
          <a href="/dashboard">
            <i class="fa fa-home " aria-hidden="true"></i><span>test</span>
          </a>
          @break

      @case("facilitador")
          <a href="/dashboard/turmas">
            <i class="fa fa-users " aria-hidden="true"></i><span>Campanha</span>
          </a>
          <a href="/dashboard/turmas">
            <i class="fa fa-users " aria-hidden="true"></i><span>Encontro</span>
          </a>
          <a href="/dashboard/participante/listar">
            <i class="fa fa-users " aria-hidden="true"></i><span>Participantes</span>
          </a>
          @break
      
      @case("participante")
          <a href="/dashboard/turma">
            <i class="fa fa-users " aria-hidden="true"></i><span>Turma</span>
          </a>
          <a href="/dashboard/missoes">
            <i class="fa fa-flag-checkered " aria-hidden="true"></i><span>Missões</span>
          </a>
          <a href="/dashboard/poderes">
            <i class="fa fa-fire " aria-hidden="true"></i><span>Poderes</span>
          </a>
          <a href="/dashboard/conta">
            <i class="fa fa-user " aria-hidden="true"></i><span>Conta</span>
          </a>
          @break
          
      @default
          
  @endswitch
  @endsection

  <nav class="navbar navbar-gradient navbar-top scrolled navbar-fixed-top">
    <div class="container">

      @include('layouts.menu.desktop.cima')

      @extends('layouts.menu.mobile.baixo')
      @section('conteudo.menu.mobile.baixo')
        <li><a href="/dashboard/conta">
            <i class="button fa fa-user fa-2x fa-mobile-3x" aria-hidden="true"></i><p>Conta</p>
        </a></li>
      @endsection

    </div>
  </nav>
</div>