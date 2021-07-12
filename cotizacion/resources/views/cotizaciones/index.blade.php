@extends('empresas.layout')

@section('mycontent')
<link href="../css/login.css" rel="stylesheet">
<div>
	<div class="title-inicio">
		<h2 align="center"><b>Cotizaciones</b></h2>
	<br>
	</div>
	<div>
		@foreach($petitions as $petition)
		<button class="accordion"><a href=" {{ route('comparaciones.show', $petition->id) }} "> {{$petition->title}} </a></button>
		<div class="panelesacordion">
				<p> Estado: {{$petition->state->name}} </p>
				@if($petition->winner == auth('companies')->user()->name)
					<h5 class="text-success">FELICIDADES</h5>
				@endif
				<p>Adjudicado a: <b>{{$petition->winner}}</b></p>
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