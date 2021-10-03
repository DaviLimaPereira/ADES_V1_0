@extends('master');
@section('titulo','WinTECH - Agremiações')
@section('cabeçalho','Agremiações - Cadastro')
@section('conteudo')
<div class="col-md-6">
<form method="POST">
  <div class="form-group">
    <label for="InputName">Endereço de email</label>
    <input type="name" class="form-control" id="InputName" aria-describedby="emailHelp" placeholder="Agremiação">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
@endsection