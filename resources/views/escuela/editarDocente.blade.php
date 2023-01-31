@extends('plantilla')
@section('contenido')
<div class="row d-flex justify-content-center mt-5">
<div class="col-12 col-sm-10 col-lg-8">
    <form class="form" action="{{route('escuela.docentes.update', $docente->idUsuario)}}" method="POST">
        @csrf
      <div class="form-group row my-2">
        <label for="nombres" class="col-12 col-sm-2 col-form-label"><b>Nombres</b></label>
        <div class="col-12 col-sm-10"><input type="text" name="nombres" id="nombres" placeholder="{{$docente->nombres}}" class="form-control"  maxlength="100" readonly></div>
      </div>
      <div class="form-group row my-2">
        <label for="logros" class="col-12 col-sm-2 col-form-label mb-2"><b>Logros</b></label>
        <div class="col-12 col-sm-10"><textarea class="form-control" id="logros" name="logros" maxlength="600" rows="6" required>{{$docente->logros}}</textarea></div>
      </div>  
      @error('logros')
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