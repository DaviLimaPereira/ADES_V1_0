@extends('master');
@section('titulo','WinTECH - Dashboard')
@section('home','nav-link')
@section('agremiacao','nav-link')
@section('conteudo')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    @guest
        <h1 class="h2">Área Restrita</h1>
	@else
        <h1 class="h2">Olá {{ Auth::user()->name }}</h1>
	    <a href="/agremiacao/create" class="btn btn-primary btn-sm">Novo</a>
	@endguest 
</div>
@endsection