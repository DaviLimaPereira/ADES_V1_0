@extends('master');
@section('titulo','WinTECH - Agremiações')
@section('home','nav-link')
@section('agremiacao','nav-link active')
@section('conteudo')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Apurações</h1>
	@guest
	@else
	<a href="/apuracao/create" class="btn btn-primary btn-sm">Novo</a>
	@endguest 
</div>