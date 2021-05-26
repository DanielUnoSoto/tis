@extends('users.ua.layout')

@section('mycontent')
    <div class="text-center" class="fw-bold">
      <h1>BIENVENIDO AL SISTEMA DE LA UNIDAD DE ADMINISTRACION</h1>
      <br>
      <h1> {{$user->name}} </h1>
      <h1>{{$user->role->name}}</h1>
    </div>
@endsection