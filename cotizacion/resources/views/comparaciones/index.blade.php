@extends('users.ua.layout')

@section('mycontent')
<link href="../css/login.css" rel="stylesheet">
<br>
<div>
	<div class="d-flex justify-content-center text-center">
		<h3>Cuadros Comparativos</h3>
	</div>
	
	<h4>Solicitudes</h4>

	<div>
		@foreach($petitions as $petition)
		<button class="accordion"><b>Solicitud:</b> {{$petition->title}} </button>
		<div class="panelesacordion">
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
						<div class="d-grid gap-2 d-md-flex justify-content-md-center" style="padding-bottom: 4px">
						<button class="btn btn-primary" type="submit">Eliminar</button>
						</div>
					</form>
					<div class="d-grid gap-2 d-md-flex justify-content-md-center">
					<a class="btn btn-primary" href=" {{route('comparaciones.show', $petition->id)}} ">Crear</a>
					</div>
				</div>
		@endforeach
	</div>
</div>
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