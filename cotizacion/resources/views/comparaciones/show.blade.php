@extends('users.ua.layout')

@section('mycontent')

<h2 class= "transformacion1 text-center font-weight-bold">Cuadro comparativo</h2>
<div class="container">
	<div class="card border-success mb-3">
		<div class="card-body">
			<p class="font-weight-bold" style = "float: left"> ID solicitud:</p>
			<p>&nbsp {{$petition->id}} </p>
			<p class="font-weight-bold" style = "float: left"> Emision: </p>
			<p>&nbsp{{$petition->created_at}} </p>
			<p class="font-weight-bold" style = "float: left">Unidad solicitante:</p>
			<p class="text-capitalize"> &nbsp{{$petition->unit->name}} </p>
			<p class="font-weight-bold" style = "float: left">Nombre solicitante:</p>
			<p class="text-capitalize">&nbsp {{$petition->user->name}} {{$petition->user->last_name}} </p>
		</div>
	</div>
		<div>
			<h2 class= "transformacion1 text-center font-weight-bold">Tabla comparativa</h2>
			<table class="table table-dark table-hover"  border="1">
			<thead>
				<tr>
					<th>Empresa</th>
					<th>Cantidad</th>
					<th>Detalles</th>
					<th>Unidad</th>
					<th>Valor Unitario</th>
					<th>Valor Total</th>
				</tr>
				<tbody>	
				@foreach($quotations as $quotation)
				<tr>
				
						<td> {{$quotation->company->name}} </td>
						<td> {{$quotation->quantity}} </td>
						<td> {{$quotation->details}} </td>
						<td> {{$quotation->type_unit}} </td>
						<td> {{$quotation->unit_value}} </td>
						<td> {{$quotation->total_value}}  </td>
					</tr>
					@endforeach
				</tbody>
			</thead>
			</table>
		
		</div>

</div>
<?php
		foreach ($quotations as $k => $v) {
  			$tArray[$k] = $v['total_value'];
		}
		$min_value = min($tArray);
		$max_value = max($tArray);
	?>
	<h3 id="valorTotal" style="text-align: center">Mejor opción: {{$min_value}}</h3>
</div>
<script type="text/javascript">
	var input = document.getElementById("valorTotal").style.color="black"; 				
</script>

@stop