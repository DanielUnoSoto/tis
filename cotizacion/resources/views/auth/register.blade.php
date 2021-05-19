@extends('auth.registerlay')
@section('content')
<link rel="stylesheet" href="../css/register.css">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse">
        <a href="/" class="navbar-brand">
            <img src="../imagenes/umss.png" atl="" class="d_inline-block aling-top" height="70"
            width="50">
        Universidad Mayor de San Simon
        </a>
        </div>
	<button class="btn btn-outline-primary">
		{{-- @if(Auth::user()->unit->type_id === 1)
	        <a class="nav-link " aria-current="logout" href="{{route('ug')}}">
	            Volver
	        </a>
		@elseif(Auth::user()->unit->type_id === 2)
			<a class="nav-link " aria-current="logout" href=" {{route('ua')}} " >
	            Volver
	        </a>
	    @endif --}}
	    <a class="nav-link " aria-current="logout" href="{{route('unit.index', ['name' => Auth::user()->unit->name])}}">
            Volver
        </a>
    </button>
</nav>

<br>

<div class="d-flex justify-content-center text-center form-register">
	<form class="bg-light" method="POST" action="{{ route('registrar.store') }}">
<div  class="title-inicio">
	<h2><b>Registro de Usuarios</b></h2>
	<br>
	<br>
	
		
			@csrf
			<div class="form-group">
				<label for="inputName4" class="form-label">Nombre(s)*</label>
				<input type="text" class="form-control" name="name" id="inputName4" placeholder="Ingrese sus nombres" size="40" required autofocus>
			</div>
			<div class="form-group">
				<label for="inputEmail4" class="form-label">Email*</label>
				<input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Ingrese su dirección de correo" size="40" required>
			</div>
			<div class="form-group">
				<label for="inputPassword4" class="form-label">Contraseña*</label>
				<input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Ingrese su contraseña" size="40" required>
			</div>
			<div class="form-group">
				<label for="inputName" class="form-label">Apellido(s)*</label>
				<input type="text" class="form-control" name="last_name" id="inputApellidos" placeholder="Ingrese sus apellidos" size="40" required>
			</div>
			<div class="form-group">
				<label for="inputTelf" class="form-label">Telefono</label>
				<input type="tel" class="form-control" name="phone" id="inputTelf" placeholder="Ingrese su número de teléfono" size="40" required>
			</div>
			<div class="form-group">
				<label for="inputRol" class="form-label">Seleccione un Rol</label>
				<select class="form-select" name="role_id">
					<option selected></option>
					<@foreach($roles as $role)
						<option value="{{$role->id}}">{{$role->name}}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label for="inputRol" class="form-label">Seleccione una Unidad</label>
				<select class="form-select" name="unit_id">
					<option selected></option>
					@foreach($units as $unit)
						<option value="{{$unit->id}}">{{$unit->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="col-12">
				<button type="submit" class="btn btn-primary" style="background-color: rgb(46, 46, 46)">Registrar</button>
			</div>
		
	  </div>
	
</form>

</div>