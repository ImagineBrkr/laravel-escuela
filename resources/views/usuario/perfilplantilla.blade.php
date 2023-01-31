@extends('plantilla')
@section('contenido')
<div class="row d-flex justify-content-center"><div class="col-12">
    <div class="row mt-5"><div class="col"><h3>Mi Usuario</h3></div></div>
    <hr>
    <div class="row">
      <div class="col-4">
        <div class="row" style="">
          <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('verPerfil', $usuario->idUsuario)}}">Información</a>
              </li>
              @if(Session::get('rol') == 'Administrador')
              <li class="nav-item">
                <a class="nav-link" href="{{route('registro')}}">Crear usuario</a>
              </li>
              @endif 
              @if(Session::get('rol') == 'Estudiante')
              <li class="nav-item">
                <a class="nav-link" href="{{route('tramites', $usuario->idUsuario)}}">Mis trámites</a>
              </li>
              @endif 
            </ul>
          </div>
      </div>
      <div class="col-8">
        @yield('contenido.perfil')
      </div>        
</div></div>
@endsection