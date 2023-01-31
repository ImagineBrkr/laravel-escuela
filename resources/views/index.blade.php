@extends('plantilla')
@section('contenido')
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carous el-item active contenedor__item">
        <div style="position:absolute; top:50%;left: 15%; ">
        <h1 class="contenedor__text">Escuela de Ingeniería de Sistemas de la UNT</h1>
        </div>
        <img class="img-fluid contenedor__img" src="img/portada2.jpg" alt="">
      </div>
      {{-- <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div>--}}
    </div> 
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
@endsection