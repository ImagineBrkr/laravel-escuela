@extends('usuario.perfilplantilla')
@section('contenido.perfil')
<div class="row"><div class="col"><h3>Trámites</h3></div></div>
@foreach ($tramites as $item)
<div class="row my-3"><div class="col-3"><b>{{$item->nombre}}</b></div><div class="col-7">{{$item->descripcion}}</div><div class="col-2">{{$item->fecha}}</div></div>
@endforeach
@endsection