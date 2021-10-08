@extends('master');
@section('titulo','WinTECH - Dashboard')
@section('home','nav-link')
@section('agremiacao','nav-link')
@section('conteudo')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Olá {{ Auth::user()->name }}</h1>  
</div>
    <div class="row">
        <div class="col-sm">
            <a href="/agremiacao" class="btn btn-outline-warning btn-lg btn-block">Agremiação</a>
        </div>
        <div class="col-sm">
            <a href="/evento" class="btn btn-outline-warning btn-lg btn-block">Evento</a>
        </div>
        <div class="col-sm">
            <a href="/regulamento" class="btn btn-outline-warning btn-lg btn-block">Regulamento</a>
        </div>
        <div class="w-100"><br></div>
        <div class="col-sm">
            <a href="/apuracao" class="btn btn-outline-warning btn-lg btn-block">Apuração</a>
        </div>
        <div class="col-sm">
            <a href="/user" class="btn btn-outline-warning btn-lg btn-block">Usúario</a>
        </div>
        <div class="col-sm">
            <a href="#" class="btn btn-outline-warning btn-lg btn-block"> </a>
        </div>
    </div>
@endsection