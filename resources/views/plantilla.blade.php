<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Escuela de Ingeniería de Sistemas - UNT</title>
</head>
<body>
    {{-- NAV BAR --}}
    {{-- @yield('contenido')  --}}
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
                <img src="img/logo.png" alt="" class="logo" >
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('inicio')}}">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('noticias')}}">Noticias</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1"  data-bs-toggle="dropdown">
                  Escuela
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1"> 
                  <li><a class="dropdown-item" href="{{route('escuela.docentes')}}">Docentes</a></li>
                  <li><a class="dropdown-item" href="{{route('escuela.cursos')}}">Cursos</a></li>
                  <li><a class="dropdown-item" href="{{route('escuela.investigaciones')}}">Investigaciones</a></li>
                  <li><a class="dropdown-item" href="{{route('escuela.comunicados')}}">Comunicados</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Especialidades
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                  <li><a class="dropdown-item" href="{{route('especialidades.postgrado')}}">Postgrado</a></li> 
                  {{-- Oportunidades Laborales --}}
                </ul>
            </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Institucional
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                  <li><a class="dropdown-item" href="{{route('institucional')}}">Misión y Visión</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Académico
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink4">
                  <li><a class="dropdown-item" href="{{route('academico.ingresante')}}">Perfil Ingresante</a></li>
                  <li><a class="dropdown-item" href="{{route('academico.egresado')}}">Perfil Egresado</a></li>
                </ul>
              </li>
              @if(Session::has('usuario')) 
              @php
               $idUsuario = Session::get('usuario')   
              @endphp
              <li class="nav-item"><a class="nav-link" style="font-size: 18px;" href="{{route('verPerfil', $idUsuario)}}">Ver perfil</a></li>
              <li class="nav-item"><a class="nav-link" style="font-size: 18px;" href="{{route('salir')}}">Salir</a></li>
              @else
              <li class="nav-item"><a class="nav-link" style="font-size: 18px;" href="{{route('ingreso')}}">Iniciar sesión</a></li>
              @endif
            </ul>
          </div>
        </div>
      </nav>
      <section>
        <div class="container">
          @yield('contenido')
        </div>
        
      </section>
      
      {{-- CARRUSEL --}}
      
    </div>
    <footer class="footer text-center" style="margin-top: 50px">
      <div class="container">
          <div class="row">
              <!-- Footer Location-->
              <div class="col-lg-4 mb-5 mb-lg-0">
                  <h4 class="text-uppercase mb-4">Ubicános</h4>
                  <p class="lead mb-0">
                    Puerta Nº 03 de la Ciudad Universitaria <br/>
                    Registro Técnico (2do Piso)
                  </p>
              </div>
              <!-- Footer Social Icons-->
              <div class="col-lg-4 mb-5 mb-lg-0">
                  <h4 class="text-uppercase mb-4">Contáctanos</h4>
                  <p class="lead mb-0">
                    (044) 221542<br/>
                    Correo: sistemas@unitru.edu.pe <br>
                    Horario: 07:00 a.m. a 2:45pm
                  </p>
              </div>
              <!-- Footer About Text-->
              <div class="col-lg-4">
                  <h4 class="text-uppercase mb-4">Autores</h4>
                  <p class="lead mb-0">
                      GRUPO N° 01
                  </p>
              </div>
          </div>
      </div>
  </footer>
    {{-- <footer>
        <div class="container" style="align: center">
        <p>© 2021 - Escuela de Ingeniería de Sistemas. Todos los derechos reservados.</p>
        </div>
    </footer> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>