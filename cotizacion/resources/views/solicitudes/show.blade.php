@extends($navbar)

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
		@if(auth('companies')->user())
			<br>
			<div class="d-grid gap-2 d-md-flex justify-content-md-center">
				<a class="btn btn-primary" style="background-color: rgb(46, 46, 46)" href="{{route('cotizaciones.create', ['id' => $petition->id]) }}">Cotizar</a>		
			</div>
		@endif
		<br>
		@if(Auth::user() && $petition->state->name == 'aceptado')	
			<h3 class= "transformacion1 text-center font-weight-bold">Cotizaciones</h3>
			@foreach($quotations as $quotation)
				<div  class="card text-white bg-dark mb-3">
					<div class="card-body">
						<p class="font-weight-bold" style = "float: left">Empresa: </p>
						<p> &nbsp{{ $quotation->company_name }}</p>
						<p class="font-weight-bold" style = "float: left">NIT: </p>
						<p> &nbsp{{ $quotation->company_nit }}</p>
						<p class="font-weight-bold" style = "float: left">Garantia: </p>
						<p> &nbsp{{ $quotation->safeguard }}</p>
						<p class="font-weight-bold" style = "float: left">Telefono: </p>
						<p> &nbsp{{ $quotation->company_phone }}</p>
					</div>		
				</div>
				<div>
					<table class= "table table-hover table-bordered"  >
						<thead class="thead-dark">
							<tr>
								<th>N°</th>
								<th>Cantidad</th>
								<th>Unidad</th>
								<th>Detalles</th>
								<th>Precio Unitario</th>
								<th>Precio total</th>
							</tr>
						</thead>
						<tbody>	
							@foreach($quotation->items as $item)
								<tr>
									<td>  </td>
									<td> {{$item->quantity}} </td>
									<td> {{$item->type_unit}} </td>
									<td> {{$item->details}} </td>
									<td> {{$item->unit_value}} </td>
									<td> {{$item->total_value}} </td>
								</tr>
							@endforeach
						</tbody>
					</table>
					<p> TOTAL: {{ $quotation->total }}</p>
				</div>
			@endforeach
			@if(count($quotations) >= 3)
				@method('PUT')
	    		@csrf
	    		<input type="hidden" name="estado" value="enviado">
				<div class="d-grid gap-2 d-md-flex justify-content-md-center">
					<button class="btn btn-primary" style="background-color: rgb(46, 46, 46)" type="submit" >
						Enviar
					</button>
				</div>
				</form>
			@endif
		@endif
	</div>
</div>
@stop