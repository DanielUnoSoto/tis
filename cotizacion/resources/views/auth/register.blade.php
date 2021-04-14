@extends('layouts.app')

@section('content')

<div>
	<h2>registro de usuarios</h2>

	<form method="POST" action="">
		@csrf
		<p>
			<label>
				*Apellido(s):
				<input type="text" name="apellido" placeholder="apellidos">
			</label>
			
		</p>
		<p>
			<label>
				*Telefono:
				<input type="text" name="Telefono" placeholder="telefono">
			</label>
			
		</p>
		<label>
			*Rol:
			<select>
				<option>administrador</option>
			</select>
			{{-- <input type="text" name="rol" placeholder="rol"> --}}
		</label>
		<p>
			<label>
				*Correo:
				<input type="email" name="email" placeholder="email">
			</label>
			
		</p>
		<p>
			<label>
				*Contraseña:
				<input type="password" name="password" placeholder="contraseña">
			</label>
			
		</p>
		<button type="submit">registrar</button>

	</form>

</div>


@endsection