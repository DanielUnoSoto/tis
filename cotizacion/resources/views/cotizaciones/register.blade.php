@extends('empresas.layout')

@section('mycontent')

<div>	
	<h3>Solicitud</h3>
	<p>titulo: {{$petition->title}}</p>
	<p>descripcion: {{$petition->description}}</p>

	<table class= "table-light " width="1000" border="1" >
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
</div>
<div>
	<h3>Formulario de Cotizacion</h3>
	<form method="POST" action="{{route('cotizaciones.store', ['petition_id' => $petition->id])}}">
		@csrf

		<div class="form-group">
	      	<br>
	        <label for="quantity" class="form-label">Cantidad:</label>
	        <input type="text" name="quantity" id="quantity" size="25" required autofocus>
    	</div>
    	<div class="form-group">
	      	<br>
	        <label for="type_unit" class="form-label">Undidad:</label>
	        <input type="text" name="type_unit" id="type_unit" size="25" required autofocus>
    	</div>
    	<div class="form-group">
	      	<br>
	        <label for="details" class="form-label">Detalle:</label>
	        <input type="text" name="details" id="details" size="25" required autofocus>
    	</div>
    	<div class="form-group">
	      	<br>
	        <label for="unit_value" class="form-label">Valor unitario:</label>
	        <input type="text" name="unit_value" id="unit_value" size="25" required autofocus>
    	</div>
    	<div class="form-group">
	      	<br>
	        <label for="total_value" class="form-label">Valor total:</label>
	        <input type="text" name="total_value" id="total_value" size="25" required autofocus>
    	</div>
    	<div class="col-12">
        	<button class="btn btn-primary" type="submit">Registrar</button>
    	</div>

	</form>
	<button><a href="{{ URL::previous() }}">volver</a></button>
</div>


@stop