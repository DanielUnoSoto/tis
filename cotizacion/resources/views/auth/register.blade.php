@extends('layouts.app')

@section('content')

<div>
	<h2>registro de usuarios</h2>

	<form method="POST" action=" {{route('register.store')}} ">
		@csrf
		<p>
			<label>
				*Nombre(s):
				<input type="text" name="name" placeholder="nombre">
			</label>
			
		</p>
		<p>
			<label>
				*Apellido(s):
				<input type="text" name="last_name" placeholder="apellidos">
			</label>
			
		</p>
		<p>
			<label>
				*Telefono:
				<input type="text" name="phone" placeholder="telefono">
			</label>
			
		</p>
			<label>
			*Rol:
				<input type="text" name="rol" list="rol" placeholder="Seleccione un rol">
				<datalist id="rol">
					<option>administrador</option>
					<option>unidad de gastos</option>
					<option>unidad administrativa</option>
					
				</datalist>
			{{-- <select  id="rol">

				<option name="rol_id">administrador</option>
			</select>
 --}}		</label>
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