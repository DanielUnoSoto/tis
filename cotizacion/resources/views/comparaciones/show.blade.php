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
			<table class="table table-hover table-bordered"  >
			<thead class="thead-dark">
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
				<?php
					foreach ($quotations as $k => $v) {
						$tArray[$k] = $v['total_value'];
					}
					$min_value = min($tArray);
					$max_value = max($tArray);
				?>
				@if($min_value == $quotation->total_value)
				<tr class="table-success">
				
						<td> {{$quotation->company->name}} </td>
						<td> {{$quotation->quantity}} </td>
						<td> {{$quotation->details}} </td>
						<td> {{$quotation->type_unit}} </td>
						<td> {{$quotation->unit_value}} </td>
						<td> {{$quotation->total_value}}  </td>
					</tr>
				@else
				<tr>
				
						<td> {{$quotation->company->name}} </td>
						<td> {{$quotation->quantity}} </td>
						<td> {{$quotation->details}} </td>
						<td> {{$quotation->type_unit}} </td>
						<td> {{$quotation->unit_value}} </td>
						<td> {{$quotation->total_value}}  </td>
					</tr>
				@endif
					@endforeach
				</tbody>
			</thead>
			</table>
		<div class="text-center justufy-content-center">
			<select class="form-select" aria-label=".form-select-sm example" name="">
				<option selected></option>
				@foreach($quotations as $quotation)
					<option value="{{$quotation->company->name}}">{{$quotation->company->name}}</option>
				@endforeach
			</select>
			<br> <br>
			<button class="btn btn-primary" style="background-color: rgb(46, 46, 46)">Enviar</button>
		</div>
		</div>

</div>
</div>
<script type="text/javascript">
	var input = document.getElementById("valorTotal").style.color="black"; 				
</script>

@stop