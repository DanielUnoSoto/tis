@extends('users.ua.layout')

@section('mycontent')

<div>
	<h3>Cuadros Comparativos</h3>
	<h5>solicitudes</h5>

	<div>
		@foreach($petitions as $petition)
			<b>Solicitud:</b> {{$petition->title}}
			<div class="panelesacordion">
				<li>
					<ul>
						<b>Solicitante:</b> {{$petition->user->name}}
					</ul>
					<ul>
						<b>Unidad:</b> {{$petition->unit->name}}
					</ul>
					<ul>
						<b>Estado:</b> {{$petition->state->name}}
					</ul>
					<form method="POST" action="{{route('solicitudes.destroy', $petition->id)}}">
						@csrf
						@method('DELETE')
						<button type="submit">eliminar</button>
					</form>
					<a href=" {{route('comparaciones.show', $petition->id)}} ">crear</a>

				</li>
			</div>
		@endforeach
	</div>
</div>
@stop