@extends('users.ug.layout')

@section('mycontent')
<link href="../css/login.css" rel="stylesheet">
<br>
<div class="d-flex justify-content-center text-center">
	<div>
		<h2>
			SOLICITUDES:
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