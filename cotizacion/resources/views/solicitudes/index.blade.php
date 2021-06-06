@extends('users.ug.layout')

@section('mycontent')

<div>
	<div>
		<h2>
			solicitudes
		</h2>
	</div>
	</div>
	<div>
		@foreach($petitions as $petition)
			<li>
				solicitud: <a href=" {{route('solicitudes.show', $petition->id)}} ">{{$petition->title}} </a>
				<ul>
					solicitante: {{$petition->user->name}}
				</ul>
				<ul>
					unidad: {{$petition->unit->name}}
				</ul>
			</li>
		@endforeach()
		
	</div>
</div>	

@stop