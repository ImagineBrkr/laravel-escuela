@extends('plantilla')
@section('contenido')
<div class="container" style="margin-top: 50px">
    @foreach ($docentes as $item)
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-4 text-center">
                    <label for="">{{$item->nombres}}</label>
                </div>
                <div class="col-6">
                    {{$item->logros}}
                </div>
                @if(Session::get('rol') == 'Administrador' || Session::get('rol') == 'Secretaría')
                <div class="col-2 text-center"><a href="{{route('escuela.docentes.editar', $item->idUsuario)}}" class="btn btn-primary">Editar</a></div>
                @endif
            </div>
        </div>
    </div>
    @endforeach
    <div style="margin-top: 45px"></div>
</div>
@endsection