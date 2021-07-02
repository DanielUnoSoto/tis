@extends('users.ug.layout')

@section('mycontent')
<link href="../../css/login.css" rel="stylesheet">
<div class="d-flex justify-content-center text-center containerSolicitudCompleto">
	<form method="POST" action="{{ route('solicitudes.update', $petition->id) }}" class="bg-light">
	<div>
		<h4 style="display: inline; padding: 54px; padding-left: 0px">Id solicitud: {{$petition->id}}</h4>
		<h4 style="display: inline; padding: 54px; padding-right: 0px">Fecha: {{$petition->created_at}}</h4>
	</div>
	<br>
	<div><h4>Descripción Solicitud: </h4> <p>{{$petition->description}}</p> </div>
	    <label class="title-inicio">
	      <h2><b> Repuesta solicitud </b></h2>
	    </label>
	    <br>
	    @method('PUT')
	    @csrf
		<input type="radio" id="aceptado" name="estado" value="aceptado">
  		<label for="aceptado">Aceptado</label>
  		<br>
  		<input type="radio" id="denegado" name="estado" value="denegado">
  		<label for="denegado">Denegado</label>
  		<br>
	    <div class="form-group">
	      <br>
	        <label for="title" class="form-label"><b>Comentario:</b> </label>
	        <textarea name="comment" id="comment"></textarea>
	        {{-- <input type="text" name="title" id="title" size="25" required autofocus> --}}
	    </div>

	    <div class="col-12">
	        <button class="btn btn-primary" style="background-color: rgb(46, 46, 46)" type="submit">Registrar</button>
	    </div>
	</form>

</div>

@stop