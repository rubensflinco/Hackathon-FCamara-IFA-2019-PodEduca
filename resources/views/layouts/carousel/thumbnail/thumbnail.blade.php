<div class="item {{$classItem}}">
    <div class="carousel-col">

        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="thumbnail" onclick="window.location.href = '{{$link}}';" style="cursor: pointer;">
            <img class="img-responsive" src="{{$img}}" />
                <div class="caption">
                    @if ($titulo)
                        <h3>{{$titulo}}</h3>
                    @endif
                    @if ($descricao)
                        <p>{{$descricao}}</p>
                    @endif
                    {{-- <br />
                    <center>
                    <a href="@yield('btnLink.carousel.thumbnail')" class="btn @yield('classBtn.carousel.thumbnail')" target="_blank" role="button">@yield('btnTitulo.carousel.thumbnail')</a>
                    </center> --}}
                </div>
            </div>
        </div>

    </div>
</div>