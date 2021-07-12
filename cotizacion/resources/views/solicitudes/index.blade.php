@extends($navbar)

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
		<button class="accordion"><b>Solicitud:</b> <a href=" {{route('solicitudes.show', $petition->id)}} ">{{$petition->title}} </a></button>
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
			@if($petition->state->name == 'aprobado')
				<ul>
					<a href="{{ route('comparaciones.show', $petition->id) }}">cuadro comparativo</a>
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