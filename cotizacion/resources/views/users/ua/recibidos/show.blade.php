@extends('users.ua.layout')

@section('mycontent')

<div class= "container">
	<form method="POST" action="{{ route('solicitudes.update', $petition->id) }}">
		<h2 class= "transformacion1 text-center font-weight-bold">
			Solicitud: {{ $petition->title }}
		</h2>
	<br>
	<div class="card border-dark mb-3">
			<div class="card-body">
				<p class="font-weight-bold" style = "float: left">Fecha: </p>
			<p> &nbsp{{$petition->created_at}}</p>
			<p class="font-weight-bold" style = "float: left">Descripcion: </p>
			<p> &nbsp{{$petition->description}}</p>
			<p class="font-weight-bold" style = "float: left">Solicitante:  </p>
			<p class="transformacion1"> &nbsp{{$petition->user->name}} {{$petition->user->last_name}} </p>
			<p class="font-weight-bold" style = "float: left">Unidad: </p>
			<p class="transformacion1"> &nbsp{{$petition->unit->name}} </p>
			<p class="font-weight-bold" style = "float: left">Estado de la solicitud: </p>
			<p class="transformacion1"> &nbsp{{$petition->state->name}} </p>
			<p class="font-weight-bold" style = "float: left">Comentario:</p>
			<p> &nbsp{{$petition->comment}} </p>
			</div>
	</div>
	<br>
	<div>
		<h3 class="text-center">Solicitamos</h3>
		<table class= "table table-hover table-bordered"  >
			<thead class="thead-dark">
				<tr>
					<th>N°</th>
					<th>Nombre</th>
					<th>Detalles</th>
					<th>Unidad</th>
					<th>Cantidad</th>
				</tr>
			</thead>
			<tbody>	
				@foreach($petition->acquisitions as $acquisition)
					<tr>
						<td>  </td>
						<td> {{$acquisition->name}} </td>
						<td> {{$acquisition->details}} </td>
						<td> {{$acquisition->unit_type}} </td>
						<td> {{$acquisition->quantity}} </td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<br>
		<div class="d-grid gap-2 d-md-flex justify-content-md-center">
			<div style="padding-right: 5px">
				<a class="btn btn-primary" style="background-color: rgb(46, 46, 46)" href="{{route('recibidos.index')}}">Atrás</a>
			</div>
			<a class="btn btn-primary" style="background-color: rgb(46, 46, 46)" href="{{ route('recibidos.edit', $petition->id) }}">Responder</a>
		</div>
	</div>
</div>
@stop