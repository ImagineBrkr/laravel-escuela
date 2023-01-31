@extends('plantilla')
@section('contenido')
@if(Session::get('rol') == 'Administrador' || Session::get('rol') == 'Secretaría')
<div class="row mt-3"><div class="col-5"><a href="{{route('agregarNoticia')}}" class="btn btn-primary">Añadir Noticia</a></div></div>
@endif
    <div class="container" style="margin-top: 50px">
        <div class="row d-flex justify-content-center">
            @foreach ($noticias as $item)
            <div class="col-4 my-2">
                <div class="row text-center">
                    <div class="col-12">
                        <h3>{{$item->titulo}}</h3>
                    </div>
                    <div class="col-12">
                        <img src="/img/prueba.png" alt="">
                    </div>
                    <div class="col-12">
                        <label for="">
                            {{$item->resumen}}
                        </label></div>
                        <div class="col-12">
                        <a href="{{route('noticias.ver', $item->idNoticia)}}">URL noticia</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection