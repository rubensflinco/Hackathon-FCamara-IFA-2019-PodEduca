<div>

  @extends('layouts.menu.lateral')
  @section('conteudo.menu.lateral')
  @switch(Auth::user()->grupo)
      @case("admin")
          <a href="/dashboard">
            <i class="fa fa-home " aria-hidden="true"></i><span>Usuário</span>
          </a>
          <a href="/dashboard/turmas">
            <i class="fa fa-home " aria-hidden="true"></i><span>Turmas</span>
          </a>
          <a href="/dashboard">
            <i class="fa fa-home " aria-hidden="true"></i><span>Conta</span>
          </a>
          <a href="/dashboard">
            <i class="fa fa-home " aria-hidden="true"></i><span>Missão</span>
          </a>
          <a href="/dashboard">
            <i class="fa fa-home " aria-hidden="true"></i><span>Poderes</span>
          </a>
          <a href="/dashboard">
            <i class="fa fa-home " aria-hidden="true"></i><span>Instituições</span>
          </a>
          <a href="/dashboard">
            <i class="fa fa-home " aria-hidden="true"></i><span>Oficinas</span>
          </a>
          @break

      @case("facilitador")
          <a href="/dashboard/turmas">
            <i class="fa fa-users " aria-hidden="true"></i><span>Turmas</span>
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
    <!-- <img src="https://zdnet4.cbsistatic.com/hub/i/r/2017/03/06/a4a5bb7b-7a1d-4f2d-8be2-a78455e8f749/resize/1200x900/9584580a6d94305113961f57d4421745/github-logo-silhouette-in-a-square318-54633.jpg" class="perfil" alt="img_perfil" /> -->
                        
      @extends('layouts.menu.desktop.cima')

      @extends('layouts.menu.mobile.baixo')
      @section('conteudo.menu.mobile.baixo')
        <li><a href="/dashboard/conta">
            <i class="button fa fa-user fa-2x fa-mobile-3x" aria-hidden="true"></i><p>Conta</p>
        </a></li>
      @endsection

    </div>
  </nav>
</div>