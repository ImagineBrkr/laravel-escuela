@extends('plantilla')
@section('contenido')
<div class="row d-flex justify-content-center mt-5">
<div class="col-12 col-sm-10 col-lg-6">
    <form class="form" action="{{route('noticias.ingresar')}}" method="POST">
        @csrf
      <div class="form-group row my-2">
        <label for="titulo" class="col-12 col-sm-2 col-form-label"><b>Título</b></label>
        <div class="col-12 col-sm-10"><input type="text" name="titulo" id="titulo" placeholder="Título" class="form-control"  maxlength="100" required></div>
      </div>
      @error('titulo')
      <div class="row">
          <strong style="color:red;">{{$message}}</strong>
      </div>
      @enderror
      <div class="form-group row my-2">
        <label for="resumen" class="col-12 col-sm-2 col-form-label mb-2"><b>Resumen</b></label>
        <div class="col-12 col-sm-10"><textarea class="form-control" id="resumen" placeholder="Resumen" name="resumen" maxlength="500" rows="4" required></textarea></div>
      </div>  
      @error('resumen')
      <div class="row">
          <strong style="color:red;">{{$message}}</strong>
      </div>
      @enderror   
      <div class="form-group row my-2">
        <label for="descripcion" class="col-12 col-sm-2 col-form-label mb-2"><b>Noticia</b></label>
        <div class="col-12 col-sm-10"><textarea class="form-control" id="descripcion" placeholder="Ingrese la noticia" name="descripcion" maxlength="3000" rows="20" required></textarea></div>
      </div>  
      @error('descripcion')
      <div class="row">
          <strong style="color:red;">{{$message}}</strong>
      </div>
      @enderror    
    <div class="row justify-content-center my-2">
      <div class="col-3 d-flex justify-content-center"><button type="submit" class="btn btn-primary">Enviar</button></div>
    </div>
    </form></div>  
</div>
@endsection