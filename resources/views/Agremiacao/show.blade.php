@extends('master');
@section('titulo','WinTECH - Agremiações')
@section('conteudo')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{$d->nome}}</h1>
</div>
<div>
    <dl>
        <dt>Nome Completo</dt>
        <dd>{{$d->nomecompleto}}</dd>
    
        <dt>Data de Fundação</dt>
        <dd>{{$d->fundacao}}</dd>
    
        <dt>Descrição</dt>
        <dd>{{$d->descricao}}</dd>
    
        <form action="/departamento/{{$d->id}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Confirmar" class="btn btn-danger btn-sm">
            <a href="/agremiacao" class="btn btn-primary btn-sm">Voltar</a>
        </form>
    </dl>
</div>
@endsection