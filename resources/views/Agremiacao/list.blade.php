@extends('master');
@section('titulo','WinTECH - Agremiações')
@section('home','nav-link')
@section('agremiacao','nav-link active')
@section('conteudo')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Agremiações</h1>
	@guest
	@else
	<a href="/agremiacao/create" class="btn btn-primary btn-sm">Novo</a>
	@endguest 
</div>
<table class="table table-striped">
<tr>
	<th>Nome</th>
	<th>Opções</th>
</tr>
<!-- Loop pela coleção de departamentos -->
@foreach($NomeVarView as $d)
<tr>
	<td>{{ $d->nome }}</td>
	
	<td>
	@guest
		<a href="/agremiacao/{{$d->id}}" class="btn btn-success btn-sm">Visualizar</a>
	@else
		<a href="/agremiacao/{{$d->id}}" class="btn btn-danger btn-sm">Excluir</a>
		<a href="/agremiacao/{{$d->id}}/edit" class="btn btn-warning btn-sm">Editar</a>
	@endguest
	</td>
	
	
</tr> 
@endforeach
</table>

@endsection