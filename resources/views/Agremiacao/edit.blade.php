@extends('master');
@section('titulo','WinTECH - Agremiações')
@section('home','nav-link')
@section('agremiacao','nav-link active')
@section('conteudo')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{$d->nome}} - Editar</h1>
</div>
<div class="col-md-6">
  <form action="/agremiacao/{{$d->id}}" method="post">
    @csrf  <!-- token de segurança -->
    @method('PUT')
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" value="{{(empty(old('nome')))?$d->nome:old('nome')}}"/>
        @if($errors->has('nome'))
        <p class="text-danger">{{$errors->first('nome')}}</p>
        @endif
    </div>
    <div class="form-group">
        <label for="nomecompleto">Nome Completo</label>
        <input type="text" name="nomecompleto" id="nomecompleto" class="form-control" value="{{(empty(old('nomecompleto')))?$d->nomecompleto:old('nomecompleto')}}"/>
        @if($errors->has('nomecompleto'))
        <p class="text-danger">{{$errors->first('nomecompleto')}}</p>
        @endif
    </div>
    <div class="form-group">
        <label for="fundacao">Data de Fundação</label>
        <input type="text" name="fundacao" id="fundacao" class="form-control" value="{{(empty(old('fundacao')))?$d->fundacao:old('fundacao')}}"/>
        @if($errors->has('fundacao'))
        <p class="text-danger">{{$errors->first('fundacao')}}</p>
        @endif
    </div>
    <div class="form-group">
      <label for="descricao">Descrição</label>
      <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control" value="{{(empty(old('descricao')))?$d->descricao:old('descricao')}}"></textarea>
      @if($errors->has('descricao'))
      <p class="text-danger">{{$errors->first('descricao')}}</p>
      @endif
  </div>
    <input type="submit" value="Alterar" class="btn btn-primary btn-sm"/>
    <a href="/agremiacao" class="btn btn-primary btn-sm">Voltar</a>
</form>
</div>
@endsection