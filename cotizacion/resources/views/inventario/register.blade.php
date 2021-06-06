@extends('users.ug.layout')

@section('mycontent')
<link href="../css/login.css" rel="stylesheet">
<div class="d-flex justify-content-center text-center containerPrincipal">
  {{-- <form method="POST" action="{{ route('facultades.store') }}" class="bg-light">
 --}}    <label class="title-inicio">
      <h2><b>
	  Registro inventarios
      </b></h2>
  
    </label>

		<form method="POST" action="{{ route('inventarios.store') }}" class="bg-light">
			@csrf
			<div class="form-group">
				<br>
			  	<label for="title" class="form-label">Titulo:</label>
			  	<input type="text" name="title" id="title" size="25" required autofocus>
			</div>

			<div class="form-group">
				<br>
			  	<label for="description" class="form-label">Descripcion:</label>
			  	<input type="text" name="description" id="description" size="25" required autofocus>
			</div>

			<div class="form-group">
				<br>
			  	<label for="year" class="form-label">Año:</label>
			  	<input type="number" name="year" id="year" size="25" required autofocus>
			</div>

			<div class="form-group">
				<label for="inputRol" class="form-label">Unidad:</label>
				<select class="form-select" name="unit_id">
					<option  value="{{$unit->id}}">{{$unit->name}}</option>
				</select>
			</div>
			<table>
				<thead>
					<tr>
						<th>codigo</th>
						<th>articulo</th>
						<th>descripcion</th>
						<th>Cantidad</th>
					</tr>
				</thead>
				<tbody>
					@for ($i = 1; $i <= 2; $i++)
						<tr>
							<td><input type="text" name="code[]" id="code" size="25" required autofocus></td>
							<td><input type="text" name="name[]" id="name" size="25" required autofocus></td>
							<td><input type="text" name="Artdescription[]" id="Artdescription" size="25" required autofocus></td>
							<td><input type="text" name="quantity[]" id="quantity" size="25" required autofocus></td>
						</tr>
					@endfor
				</tbody>
			</table>
			<div class="col-12">
			  <button type="submit" class="btn btn-primary" style="background-color: rgb(46, 46, 46)">Registrar</button>
			</div>
		</form>
	</div>
</div> 

@stop