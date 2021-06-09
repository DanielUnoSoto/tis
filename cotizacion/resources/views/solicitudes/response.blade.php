@extends('users.ug.layout')

@section('mycontent')
<div>
	<div>
		<h3>Id de solicitud: {{$petition->id}}</h3>
		<h3>fecha: </h3>
		<h3>descripcion: <h5> {{$petition->description}} </h5></h3>
	</div>
	<form method="POST" action="{{ route('solicitudes.update', $petition->id) }}" class="bg-light">
	    <label class="title-inicio">
	      <h2><b> Repuesta solicitud </b></h2>
	    </label>
	    <br>
	    @method('PUT')
	    @csrf
		<input type="radio" id="aceptado" name="estado" value="aceptado">
  		<label for="aceptado">aceptado</label>
  		<br>
  		<input type="radio" id="denegado" name="estado" value="denegado">
  		<label for="denegado">denegado</label>
  		<br>
	    <div class="form-group">
	      <br>
	        <label for="title" class="form-label">Comentario:</label>
	        <textarea name="comment" id="comment"></textarea>
	        {{-- <input type="text" name="title" id="title" size="25" required autofocus> --}}
	    </div>

	    <div class="col-12">
	        <button class="btn btn-primary" type="submit">Registrar</button>
	    </div>
	</form>

</div>

@stop