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
		<h4>en espera</h4>
		@foreach($petitions as $petition)
		<button class="accordion"><b>Solicitud:</b> <a href=" {{route('solicitudes.show', $petition->id)}} ">{{$petition->title}} </a></button>
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
			</li>
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