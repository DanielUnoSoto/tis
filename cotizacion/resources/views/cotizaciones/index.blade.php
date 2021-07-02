@extends('empresas.layout')

@section('mycontent')
<link href="../css/login.css" rel="stylesheet">
<div class="d-flex justify-content-center text-center containerSolicitudCompleto">
	<div class="title-inicio">
		<h2 ><b>Cotizaciones</b></h2>
	<br>
	<ul>
		@foreach($quotations as $quotation)
			<li>
				<a href="#"> {{$quotation->details}} </a>
			</li>
		@endforeach
	</ul>
	</div>
	
</div>
@stop