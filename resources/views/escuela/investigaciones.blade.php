@extends('plantilla')
@section('contenido')
@if(Session::get('rol') == 'Administrador' || Session::get('rol') == 'Secretaría')
<div class="row mt-3"><div class="col-5"><a href="{{route('escuela.investigaciones.añadir')}}" class="btn btn-primary">Añadir Investigación</a></div></div>
@endif
<div class="container" style="margin-top: 50px">
    @foreach ($investigaciones as $item)
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-4 text-center">
                    <img src="/img/prueba.png" alt=""><br>
                    <label for="">{{$item->titulo}}</label><br>
                    <label for="">{{$item->autor}}</label><br>
                    <a href="{{$item->url}}">URL del pdf</a>
                </div>
                <div class="col-8">
                    <label for="">Descripcion:</label><br>
                    <label for="">{{$item->descripcion}}</label>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 45px"></div>
    @endforeach
</div>
@endsection