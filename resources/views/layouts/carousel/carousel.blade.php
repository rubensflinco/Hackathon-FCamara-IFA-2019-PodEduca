@switch($local)
    @case('top')
      <div class="col-centered">
      <div id="carousel{{$id}}" class="carousel black" data-ride="carousel" infinite="true" data-type="multi" data-interval="0">
      <div class="carousel-inner">
      @break


    @case('bottom')
      </div>
      <div class="left carousel-control ">
          <a href="#carousel{{$id}}" role="button" data-slide="prev">
              <i class="glyphicon glyphicon-chevron-left rocket" alt="Anterior" aria-hidden="true"></i>
              <span class="sr-only">Anterior</span>
          </a>
      </div>
      <div class="right carousel-control ">
          <a href="#carousel{{$id}}" role="button" data-slide="next">
              <i class="glyphicon glyphicon-chevron-right rocket" alt="Próximo" aria-hidden="true"></i>
              <span class="sr-only">Próximo</span>
          </a>
      </div>
      </div>
      </div>
      @break


    @default
        
@endswitch