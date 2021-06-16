@extends('users.ug.layout')

@section('mycontent')
<link href="../css/login.css" rel="stylesheet">
<div class="d-flex justify-content-center  containerSolicitud">
	<form method="GET" action="{{ route('solicitudes.edit', $petition->id) }} " class="bg-light">
		<div>
			<h2 class= "transformacion1 text-center font-weight-bold">
				Solicitud: {{ $petition->title }}
			</h2>
		</div>
		</br>
		<div class= "container" >
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
		</br>
			<div>
				<h3>Solicitamos</h3>
				
				<table class= "table-dark " width="1000" border="1" >
					<thead>
						<tr>
							<th>N°</th>
							<th>Nombre</th>
							<th>Detalles</th>
							<th>Cantidad</th>
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
				@if(Auth::user()->role->name == 'jefe' && $petition->comment == null)
					</br>
					<div class="d-grid gap-2 d-md-flex justify-content-md-center">
						<button class="btn btn-primary" style="background-color: rgb(46, 46, 46)" type="submit" >
							Responder
						</button>
					</div>
				@endif
			</div>
	</form>	
</div>
@stop