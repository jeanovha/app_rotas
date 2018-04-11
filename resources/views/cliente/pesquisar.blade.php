<?php
   $titulo = 'Pesquisar';
?>
 @extends('cliente.cabecalho')
 @section('conteudo')

    <h1 class="mt-2">Pesquisa de Clientes </h1>

    @if(!empty($mensagem))
        <div class="alert alert-success mt-2">{{ $mensagem }}</div>
    @endif

    <form action="/clientes/pesquisar" method="post" class="form-inline mt-2">
        <input type="hidden" name="_token" value="{{{csrf_token()}}}">
        <div class="form-group">
            <label for="nomeAquicultor">Nome: </label>
            <input type="text" id="nomeAquicultor" name="nomeAquicultor" class="form-control ml-2">
        </div>
        <input type="submit" class="btn btn-primary ml-2" value="Pesquisar">
    </form>

    @if(count($clientes) == 0)
        <div class="alert alert-danger mt-2">Nenhum produto encontrado com essa descrição!</div>
    @else
        <table class="table mt-2 text-center">
            <tr>
                <th>Id</th>
                <th class="text-left">Nome</th>
                <th>Atividade</th>
                <th>CPF</th>
                <th>RG</th>
                <th>Naturalidade</th>
                <th>Inscrição Est.</th>
                <th>Tipo de propiedade</th>
            </tr>
            @foreach ($clientes as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td class="text-left">{{$c->nomeAquicultor }}</td>
                    <td>{{ $c->atividade }}</td>
                    <td>{{ $c->CPF }}</td>
                    <td>{{ $c->rg }}</td>
                    <td>{{ $c->naturalidade}}</td>
                    <td>{{ $c->inscricaoEstadual}}</td>
                    <td>{{ $c->tipoPropriedade}}</td>
                    <td><a href="/clientes/excluir/{{ $c->id }}"><button class="btn btn-danger">Excluir</button></a></td>
                    <td><a href="/clientes/alterar/{{ $c->id }}"><button class="btn btn-warning">Alterar</button></a></td>
                </tr>
            @endforeach
        </table>
    @endif
@stop




