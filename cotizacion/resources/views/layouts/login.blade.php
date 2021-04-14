@extends('layouts.app')

@section('content')

<div>
	<h2>iniciar sesion</h2>
	<form method="POST">
		@csrf
		<label>
			<input type="email" name="email" placeholder="email">
		</label>
		<label>
			<input type="password" name="password" placeholder="contraseña">
		</label>
		<button type="submit">Ingresar</button>

	</form>

</div>


@endsection