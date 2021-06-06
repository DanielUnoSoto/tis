@extends('users.ug.layout')

@section('mycontent')

<h3>
	solicitud:
	<h4>{{ $petition->title }}</h4>
</h3>

<div>
	<p>descripcion: {{$petition->description}} </p>
	<p>Solicitante: {{$petition->user->name}} {{$petition->user->last_name}} </p>
	<p>Unidad: {{$petition->unit->name}} </p>
	<p>estado de la solicitud: {{$petition->state->name}} </p>
</div>

<div>
	<h3>Solicitamos</h3>
	<table width="50%" border="1" >
		<thead>
			<tr>
				<th>N°</th>
				<th>nombre</th>
				<th>destalles</th>
				<th>cantidad</th>
			</tr>
		</thead>
		<tbody>	
			@foreach($petition->acquisitions as $acquisition)
				<tr>
					<td>  </td>
					<td> {{$acquisition->name}} </td>
					<td> {{$acquisition->details}} </td>
					<td> {{$acquisition->quantity}} </td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>

@stop