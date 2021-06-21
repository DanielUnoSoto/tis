@extends('users.ua.layout')

@section('mycontent')

<h5>Cuadro comparativo</h5>

<div>
	<p> ID solicitud: {{$petition->id}} </p>
	<p> emision: {{$petition->created_at}} </p>
	<p>Unidad solicitante: {{$petition->unit->name}} </p>
	<p>Nombre solicitante: {{$petition->user->name}} {{$petition->user->last_name}} </p>

	<div>
		<h5>tabla de comparacion</h5>
		<ul>
			@foreach($quotations as $quotation)
				<li> empresa: {{$quotation->company->name}} </li>
				<li> cantidad: {{$quotation->quantity}} </li>
				<li> detalles: {{$quotation->details}} </li>
				<li> unidad: {{$quotation->type_unit}} </li>
				<li> valor unitario: {{$quotation->unit_value}} </li>
				<li> valor total: {{$quotation->total_value}} </li>
				<hr>
			@endforeach
		</ul>
	</div>

</div>


@stop