@extends('users.ua.layout')

@section('mycontent')
<link href="../css/login.css" rel="stylesheet">
<h3 class="d-flex justify-content-center text-center">SOLICITUDES A RESPONDER:</h3>
@if(sizeof($petitions) == 0)
	<h5>No hay solicitudes para responder</h5>
@else
	@foreach($petitions as $petition)
	<button class="accordion"><b>Solicitud:</b> <a href="{{ route('recibidos.show', $petition->id)}}"> {{$petition->title}}</a></button>
	<div class="panelesacordion">
			<ul>
				<b>Solicitante:</b> {{$petition->user->name}}
			</ul>
			<ul>
				<b>Unidad:</b> {{$petition->unit->name}}
			</ul>
			@if(Auth::user())
				<ul>
				<b>Estado:</b> {{$petition->state->name}}
				</ul>
			@endif
			
			@if($petition->state->name == 'aceptado')
				<ul>
					<b>Cotizaciones:</b> {{count($petition->quotations)}}
					@if( Auth::user() && count($petition->quotations) >= 3)
						<p class="text-info">listo para enviarse</p>
					@endif
				</ul>
			@endif
			@if (auth('companies')->user())
				<div class="d-grid gap-2 d-md-flex justify-content-md-center">
					<a class="btn btn-primary" href="{{route('cotizaciones.create', ['id' => $petition->id])}}">Cotizar</a>
				</div>
			@elseif($petition->user->name == Auth::user()->name && $petition->state->name == 'espera')
				<form method="POST" action="{{route('solicitudes.destroy', $petition->id)}}">
					@csrf
					@method('DELETE')
					<div class="d-grid gap-2 d-md-flex justify-content-md-center">
					<button class="btn btn-primary" type="submit">Eliminar</button>
					</div>
				</form>
			@endif
	</div>
	@endforeach
@endif
<script>
	var acc = document.getElementsByClassName("accordion");
	var i;
	
	for (i = 0; i < acc.length; i++) {
	  acc[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var panelesacordion = this.nextElementSibling;
		if (panelesacordion.style.display === "block") {
		  panelesacordion.style.display = "none";
		} else {
		  panelesacordion.style.display = "block";
		}
	  });
	}
	</script>
@stop