@extends('master');
@section('titulo','WinTECH - Agremiações')
@section('cabeçalho','Agremiações - Cadastro')
@section('conteudo')
<div class="col-md-6">
  <form action="/agremiacao" method="post">
    @csrf  <!-- token de segurança -->
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" value="{{old('nome')}}"/>
        @if($errors->has('nome'))
        <p class="text-danger">{{$errors->first('nome')}}</p>
        @endif
    </div>
    <div>
        <label for="nomecompleto">Nome Completo</label>
        <input type="text" name="nomecompleto" id="nomecompleto" class="form-control" value="{{old('nomecompleto')}}"/>
        @if($errors->has('nomecompleto'))
        <p class="text-danger">{{$errors->first('nomecompleto')}}</p>
        @endif
    </div>
    <div>
        <label for="fundacao">Data de Fundação</label>
        <input type="text" name="fundacao" id="fundacao" class="form-control" value="{{old('fundacao')}}"/>
        @if($errors->has('fundacao'))
        <p class="text-danger">{{$errors->first('fundacao')}}</p>
        @endif
    </div>
    <div>
      <label for="descricao">Data de Fundação</label>
      <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control" value="{{old('descricao')}}"></textarea>
      @if($errors->has('descricao'))
      <p class="text-danger">{{$errors->first('descricao')}}</p>
      @endif
  </div>
    <input type="submit" value="Criar" class="btn btn-primary btn-sm"/>
    <a href="/agremiacao" class="btn btn-primary btn-sm">Voltar</a>
</form>
</div>
@endsection