@extends('users.ug.layout')

@section('mycontent')

<div>
	<h1>registro de un inventario</h1>
	<div>
		<form method="POST" action="{{ route('inventarios.store') }}" class="bg-light">
			@csrf
			<div class="form-group">
				<br>
			  <label for="title" class="form-label">titulo:</label>
			  <input type="text" name="title" id="title" size="25" required autofocus>
			</div>

			<div class="form-group">
				<br>
			  <label for="description" class="form-label">descripcion:</label>
			  <input type="text" name="description" id="description" size="25" required autofocus>
			</div>

			<div class="form-group">
				<br>
			  <label for="year" class="form-label">año:</label>
			  <input type="number" name="year" id="year" size="25" required autofocus>
			</div>

			<div class="form-group">
				<label for="inputRol" class="form-label">Unidad:</label>
				<select class="form-select" name="unit_id">
					<option  value="{{$unit->id}}">{{$unit->name}}</option>
				</select>
			</div>

			<div class="col-12">
			  <button type="submit" class="btn btn-primary" style="background-color: rgb(46, 46, 46)">Registrar</button>
			</div>
		</form>
	</div>
</div> 

@stop