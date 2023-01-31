@extends('usuario.perfilplantilla')
@section('contenido.perfil')
<div class="row"><div class="col"><h3>Información</h3></div></div>
<div class="row my-1"><div class="col"><b>Nombres</b> {{$usuario->nombres}}</div></div>
<div class="row my-1"><div class="col"><b>Rol:</b> {{$usuario->tipoUsuario}}</div></div>
<div class="row my-1"><div class="col"><b>DNI:</b> {{$usuario->DNI}}</div></div>
<div class="row my-1"><div class="col"><b>Código:</b> {{$usuario->codigo}}</div></div>
@endsection