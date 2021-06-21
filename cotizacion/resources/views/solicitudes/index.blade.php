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
				@if($petition->state->name == 'aceptado')
					<ul>
						<b>cotizaciones:</b> {{count($petition->quotations)}}
					</ul>
				@endif
        		@if (auth('companies')->user())
					 <a href="{{route('cotizaciones.create', ['id' => $petition->id])}}">cotizar</a>
        		@endif
			</li>
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