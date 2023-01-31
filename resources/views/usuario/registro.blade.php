@extends('plantilla')
@section('contenido')
<div class="row py-3 d-flex justify-content-center">
    <div class="col-12 col-sm-10 col-lg-8">
    <form class="form" action="{{route('registrar')}}" method="POST">
        @csrf
      <div class="form-group row my-2">
        <label for="codigo" class="col-12 col-sm-2 col-form-label mb-2"><b>Código</b></label>
        <div class="col-12 col-sm-10"><input type="number" name="codigo" id="codigo" placeholder="Código" class="form-control"  maxlength="20" required></div>
      </div>
      @error('codigo')
      <div class="row">
          <strong style="color:red;">{{$message}}</strong>
      </div>
      @enderror
      <div class="form-group row my-2">
        <label for="nombres" class="col-12 col-sm-2 col-form-label mb-2"><b>Nombres</b></label>
        <div class="col-12 col-sm-10"><input type="text" id="nombres" name="nombres" placeholder="Nombres completos" class="form-control"  maxlength="100" required></div>
      </div>
      @error('nombres')
      <div class="row">
          <strong style="color:red;">{{$message}}</strong>
      </div>
      @enderror
      <div class="form-group row my-2">
        <label for="dni" class="col-12 col-sm-2 col-form-label mb-2"><b>DNI</b></label>
        <div class="col-12 col-sm-10"><input type="number" id="dni" name="dni" placeholder="DNI" class="form-control"  maxlength="8" required></div>
      </div>
      @error('dni')
      <div class="row">
          <strong style="color:red;">{{$message}}</strong>
      </div>
      @enderror
      <div class="form-group row my-2">
        <label for="tipoUsuario" class="col-12 col-sm-2 col-form-label mb-2"><b>Tipo de usuario</b></label>
        <div class="col-12 col-sm-10"><select class="form-select" aria-label="Default select example" name="tipoUsuario" required>
            <option value="" selected>Seleccionar tipo de usuario</option>
            <option value="Administrador">Administrador</option>
            <option value="Secretaría">Secretaría</option>
            <option value="Docente">Docente</option>
            <option value="Estudiante">Estudiante</option>
          </select></div>
      </div>
      <div class="form-group row my-2">
        <label for="contraseña" class="col-12 col-sm-2 col-form-label mb-2"><b>Contraseña</b></label>
        <div class="col-12 col-sm-10"><input type="password" id="contraseña" name="contraseña" placeholder="Contraseña" class="form-control"  maxlength="20" required></div>
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