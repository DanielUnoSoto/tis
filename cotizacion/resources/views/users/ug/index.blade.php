@extends('users.ug.layout')

@section('content')

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
  <a class="navbar-brand" href="#">Unidad de gastos {{ $user->unit->name }}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      @if(Auth::user()->role->name == 'jefe')
        <li class="nav-item active">
          <a class="nav-link" href=" {{route('register.create')}} ">Registrar Usuario <span class="sr-only">(current)</span></a>
        </li>
      @endif
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Generar Solicitudes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Solicitudes de compra</a>
          <a class="dropdown-item" href="#">Solicitudes de Alquiler</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Otro</a>
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
        <h1>BIENVENIDO SISTEMA DE UNIDAD DE GASTOS</h1>
        <br>
        <h1>{{ $user->name }}</h1>
        <br>
        <h1>{{ $user->role->name }}</h1>
    </div>

