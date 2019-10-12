<h3>Facilitador</h3>

<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
    Sair
</a>

<a href="{{ route('instituicao.cadastrar') }}" >
    Cad Inst
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>