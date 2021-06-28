@extends('empresas.layout')

@section('mycontent')
<link href="../css/login.css" rel="stylesheet">
<div class="d-flex justify-content-center  containerCotEmpr">
	<form method="POST" action="{{route('cotizaciones.store', ['petition_id' => $petition->id])}}">
<div>
	<div class= "transformacion1 text-center font-weight-bold">
		<h3>Solicitud</h3>
	</div>
	<br>
	<div class= "container">
		<p class="font-weight-bold" style = "float: left">Título: </p>
		<p> &nbsp{{$petition->title}}</p>
		<p class="font-weight-bold" style = "float: left">Descripción: </p>
		<p> &nbsp{{$petition->description}}</p>
	</div>
	<table class= "table-dark" width="1000" border="1" >
		<thead>
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
</div>
<div>
	<br>
	<h3 class= "transformacion1 text-center font-weight-bold">Formulario de Cotización</h3>
		@csrf
		<br>
		<div>
			<div class="form-group" style="padding-left: 340px">
	        <label for="quantity" class="form-label"><b>Cantidad:</b></label>
			<label>
				<input type="text" name="quantity" id="quantity" size="25" class="monto" onkeyup="multi();" required autofocus>
			</label>
			</div>
			<div class="form-group" style="padding-left: 354px">
	        <label for="type_unit" class="form-label"><b>Unidad:</b></label>
	        <input type="text" name="type_unit" id="type_unit" size="25" required autofocus>
			</div>
			<div class="form-group" style="padding-left: 354px">
	        <label for="details" class="form-label"><b>Detalle:</b></label>
	        <input type="text" name="details" id="details" size="25" required autofocus>
			</div>
			<div class="form-group" style="padding-left: 304px">
	        <label for="unit_value" class="form-label"><b>Valor unitario:</b></label>
			<label>
				<input type="text" name="unit_value" id="unit_value" size="25" class="monto" onkeyup="multi();" required autofocus>
			  </label>
    		</div>
			<div class="form-group" style="padding-left: 328px">
	        <label for="total_value" class="form-label"><b>Valor total:</b></label>
			<label id="Costo" name="Costo" id="Costo">
				<input type="text" name="total_value" id="total_value" size="25" readonly >
			</label>
			</div>
			<script>
				function multi(){
				 var total = 1;
				 var change= false; //
				 $(".monto").each(function(){
					 if (!isNaN(parseFloat($(this).val()))) {
						 change= true;
						 total *= parseFloat($(this).val());
					 }
				 });
				 // Si se modifico el valor , retornamos la multiplicación
				 // caso contrario 0
				 total = (change)? total:0;
				 document.getElementById('total_value').value = total;
			 }
			 </script>
			 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    	</div>
    	<div class="d-grid gap-2 d-md-flex justify-content-md-center">
			<div style="padding-right: 5px">
				<a class="btn btn-primary" href="{{ URL::previous() }}">Volver</a>
			</div>
			<button class="btn btn-primary" type="submit">Registrar</button>        	
    	</div>
		
	</form>
	
</div>
</div>

@stop