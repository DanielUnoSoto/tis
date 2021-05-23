@extends('users.ug.layout')

@section('mycontent')

<div class="text-center" class="fw-bold">
  <h1>BIENVENIDO SISTEMA DE UNIDAD DE GASTOS</h1>
  <br>
  <h1>{{ $user->name }}</h1>
  <br>
  <h1>{{ $user->role->name }}</h1>
</div>

@stop
