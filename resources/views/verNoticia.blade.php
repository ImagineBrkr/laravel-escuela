@extends('plantilla')
@section('contenido')
<div class="container" style="margin-top: 50px">
    <div class="row d-flex justify-content-center">
        <div class="col-10">
            <div class="row text-center">
                <div class="col-12">
                    <h3>{{$noticia->titulo}}</h3>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                        {!!$noticia->descripcion!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection