@extends('plantilla')
@section('contenido')
<div class="row d-flex justify-content-center mt-5">
<div class="col-12 col-sm-10 col-lg-6">
    <form class="form" action="{{route('ingresar')}}" method="POST">
        @csrf
      <div class="form-group row my-2">
        <label for="codigo" class="col-12 col-sm-2 col-form-label"><b>Código</b></label>
        <div class="col-12 col-sm-10"><input type="text" name="codigo" id="codigo" placeholder="Codigo" class="form-control"  maxlength="20" required></div>
      </div>
      @error('codigo')
      <div class="row">
          <strong style="color:red;">{{$message}}</strong>
      </div>
      @enderror
      <div class="form-group row my-2">
        <label for="contraseña" class="col-12 col-sm-2 col-form-label mb-2"><b>Contraseña</b></label>
        <div class="col-12 col-sm-10"><input type="password" id="contraseña" name="contraseña" placeholder="Contraseña" class="form-control"  maxlength="25" required></div>
      </div>  
      @error('contraseña')
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