@extends('layouts.app')

@section('content')
    <pagina tamanho="12"> 
        <painel titulo="Lista de Artigos">
        <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>

        <modal-link tipo="" nome="modalTeste" titulo="Criar" css=""></modal-link>

</button>
            <tabela-lista 
                v-bind:titulos="['ID','Titulo','Descrição']"
                v-bind:itens="{{$listaArtigos}}"               
                ordem="asc" ordemcol="0"
                criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="978978978978"

                ></tabela-lista>                        

        </painel>
    </pagina>

    <modal nome="modalTeste">
        <painel titulo="Adicionar">
            <formulario css="" action="#" method="post" enctype="multipart/form-data" token="12345">

                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
                </div>

                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
                </div>
                <button type="submit" class="btn btn-primary">Adicionar</button>
            </formulario>
        </painel>
    </modal>

@endsection
