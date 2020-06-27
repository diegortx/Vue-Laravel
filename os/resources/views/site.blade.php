@extends('layouts.app')

@section('content')
  <pagina tamanho="12">
    <painel titulo="Artigos">

      <p>
        <form class="form-inline text-center" action="{{ route('site') }}" method="get">
          <input type="search" class="form-control" name="busca" placeholder="Buscar" value="{{ isset($busca) ? $busca : "" }}">
          <button class="btn btn-info">Buscar</button>

        </form>
      </p>

      <div class="row">

        @foreach ($lista as $key => $value)
            
          <artigocard 
          titulo="{{str_limit($value->titulo,8,"...") }}" 
          descricao="{{str_limit($value->descricao,10,"...") }}" 
          link="{{ route('artigo',[$value->id,str_slug($value->titulo)]) }}" 
          imagem="https://lh3.googleusercontent.com/proxy/-w6vLabmbQgDaFH4ALgjcJTlJCZ2257l2xo3OVlDgRgwchmAPHuWwuPPw6oI4nd__JOLa1ILRMTrwCPg4XDPAWG1oslZS5gpKTik7eR9qLGqK5pPug"
          data="{{ $value->data }}"
          autor="{{ $value->autor }}"  
          sm="4"
          md="2"  
          >
        </artigocard>

        @endforeach
        
      </div>
      <div align="center">
        {{$lista}}
      </div>

    </painel>
    

  </pagina>
@endsection
