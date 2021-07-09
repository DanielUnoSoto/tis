@extends('empresas.layout')

@section('mycontent')
<link href="../css/login.css" rel="stylesheet">
<div>
	<div class="title-inicio">
		<h2 align="center"><b>Cotizaciones</b></h2>
	<br>
	</div>
	<div>
		<ul>
		@foreach($petitions as $petition)
			<li>
				<a href=" {{ route('comparaciones.show', $petition->id) }} "> {{$petition->title}} </a>
				<p> estado: {{$petition->state->name}} </p>
				@if($petition->winner == auth('companies')->user()->name)
					<h5 class="text-success">FELICIDADES</h5>
				@endif
				<p>adjunticado a: {{$petition->winner}}</p>
			</li>
		@endforeach
		</ul>
	</div>
</div>
@stop