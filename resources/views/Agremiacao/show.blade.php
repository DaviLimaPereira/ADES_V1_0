@extends('master');
@section('titulo','WinTECH - Agremiações')
@section('home','nav-link')
@section('agremiacao','nav-link active')
@section('conteudo')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    @guest
        <h1 class="h2">{{$d->nome}}</h1>
    @else
        <h1 class="h2">{{$d->nome}} - Excluir</h1>
    @endguest
</div>
<div>
    <dl>
        <div class="row">
            <div class="col-md-8">
                <dt>Nome Completo</dt>
                <dd>{{$d->nomecompleto}}</dd>
            </div>
        
            <div class="col-md-4">
                <dt>Data de Fundação</dt>
                <dd>{{$d->fundacao}}</dd>
            </div>
        </div>

        <dt>Descrição</dt>
        <dd class="text-justify">{{$d->descricao}}</dd>
    
        @guest
        <a href="/agremiacao" class="btn btn-outline-primary btn-sm">Voltar</a>
        @else
        <dt>Deseja realmente excluir?</dt>
        <form action="/agremiacao/{{$d->id}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Confirmar" class="btn btn-danger btn-sm">
            <a href="/agremiacao" class="btn btn-primary btn-sm">Voltar</a>
        </form>
        @endguest
        
    </dl>
</div>
@endsection