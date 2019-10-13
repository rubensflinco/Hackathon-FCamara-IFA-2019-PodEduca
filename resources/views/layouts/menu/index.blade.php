<div>

  @extends('layouts.menu.lateral')
  @section('conteudo.menu.lateral')
  @switch(Auth::user()->grupo)
      @case("admin")
          <a href="/dashboard/poderes">
            <i class="fa fa-fire " aria-hidden="true"></i><span>Poderes</span>
          </a>
          <a href="/dashboard/missoes/listar">
            <i class="fa fa-flag-checkered " aria-hidden="true"></i><span>Missões</span>
          </a>
          <a href="/dashboard/facilitadores/listar">
            <i class="fa fa-users " aria-hidden="true"></i><span>Facilitadores</span>
          </a>
          <a href="/dashboard/instituicao/listar">
            <i class="fa fa-building-o " aria-hidden="true"></i><span>Instituições</span>
          </a>
          @break

      @case("facilitador")
          <a href="/dashboard/campanha/listar">
            <i class="fa fa-bullhorn " aria-hidden="true"></i><span>Campanha</span>
          </a>
          <a href="/dashboard/participante/listar">
            <i class="fa fa-users " aria-hidden="true"></i><span>Participantes</span>
          </a>
          @break
      
      @case("participante")
          <a href="/dashboard/missoes">
            <i class="fa fa-flag-checkered " aria-hidden="true"></i><span>Missões</span>
          </a>
          <a href="/dashboard/poderes">
            <i class="fa fa-fire " aria-hidden="true"></i><span>Poderes</span>
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

       @switch(Auth::user()->grupo)
      @case("admin")
          <li><a href="/dashboard/instituicoes">
              <i class="button fa fa-building-o fa-2x fa-mobile-3x" aria-hidden="true"></i><p>Instituições</p>
          </a></li>
          @break

      @case("facilitador")
          <li><a href="/dashboard/campanha">
              <i class="button fa fa-bullhorn fa-2x fa-mobile-3x" aria-hidden="true"></i><p>Campanha</p>
          </a></li>
          @break
      
      @case("participante")
          <li><a href="/dashboard/missoes">
              <i class="button fa fa-flag-checkered fa-2x fa-mobile-3x" aria-hidden="true"></i><p>Missões</p>
          </a></li>
          @break
          
      @default
          
  @endswitch

      @endsection

    </div>
  </nav>
</div>