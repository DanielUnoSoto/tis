@extends('users.admin.layoutadmin')

@section('mycontent')
<br>
<br>
<br>
<div class="text-center" class="fw-bold">
  <h1>BIENVENIDO AL SISTEMA DE ADMINISTRACION</h1>
  <h1> {{$user->name}} </h1>
  <h1>{{$user->role->name}}</h1>
</div>

@stop