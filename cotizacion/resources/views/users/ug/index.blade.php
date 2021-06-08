@extends('users.ug.layout')

@section('mycontent')
<link href="../css/landingUsers.css" rel="stylesheet">
<!--Ultima version de fotawesome-->
<script src="https://kit.fontawesome.com/f5ab984d8e.js" crossorigin="anonymous"></script>


<div class="text-center contenedor" class="fw-bold">
  <div class="letras1">
    <h3>BIENVENIDO SISTEMA DE UNIDAD DE GASTOS</h3>
  </div>
  <div class="letras2">
    <h3>GESTIÓN ADMINISTRATIVA: 1/2021 </h3>
  </div>
  
</div>
<div class="contenedor" class="fw-bold">
  <div class="text-center caja1">
    <h2>INFORMACIÓN PERSONAL:</h2>
    <br>
    <h1> <i class="fas fa-user"></i> {{$user->name}} {{$user->last_name}}  </h1>
    <h1>rol: {{$user->role->name}}</h1>
  </div>
  <div class="text-center caja2">
    <h2>AVISOS IMPORTANTES</h2>
  </div>
  </div>
@stop
