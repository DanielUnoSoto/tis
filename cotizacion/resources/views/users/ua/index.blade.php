@extends('users.ua.layout')

@section('mycontent')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse">
        <a href="/" class="navbar-brand">
            <img src="imagenes/umss.png" atl="" class="d_inline-block aling-top" height="70"
            width="50">
        Universidad Mayor de San Simon
        </a>
        </div>
    <button class="btn btn-outline-primary">
        <a class="nav-link " aria-current="logout" href="login" >
            Logout
        </a>
    </button>
          
</nav>
<br>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Unidad Administrativa {{$user->unit->name}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Registrar Empresa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cuadro Comparativo</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Unidad de gastos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">UG1</a>
          <a class="dropdown-item" href="#">UG2</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Otro</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Formulario de Cotizaciones
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Cotizacion1</a>
          <a class="dropdown-item" href="#">Cotizacion2</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<br>
<br>
<br>
<br>
<br>
    <div class="text-center" class="fw-bold">
        <h1>BIENVENIDO AL SISTEMA DE LA UNIDAD DE ADMINISTRACION</h1>
        <br>
        <h1> {{$user->name}} </h1>
    </div>
@endsection