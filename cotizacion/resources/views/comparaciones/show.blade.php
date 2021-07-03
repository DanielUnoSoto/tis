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
		<p>aquisiciones de una solicitud:</p>
		@foreach($petition->acquisitions as $acquisition)
			<p> {{$acquisition->name}},{{$acquisition->details}},{{$acquisition->unit_type}}, {{$acquisition->quantity}} </p>
		@endforeach
		<p>COTIZACIONES</p>
		@foreach($quotations as $quotation)
			<p> empresa: {{$quotation->company->name}} </p>
			@foreach($quotation->items as $item)
				<p> cantidad: {{$item->quantity}},valor unitatio: {{$item->unit_value}} valor total: {{$item->total_value}}</p>
			@endforeach
			<hr>
		@endforeach
	</div>
	<div>
		<h2 class= "transformacion1 text-center font-weight-bold">Tabla comparativa</h2>
		<table class="table table-hover table-bordered">
			<thead class="thead-dark">
				<tr>
				<th>Nombre</th>
				<th>Cantidad</th>
				<th>Detalles</th>
				<th>Unidad</th>
				@foreach ($quotations as $quotation)
				<th>{{$quotation->company->name}}</th>
				@endforeach
				</tr>
			</thead>
				<tbody>
				@foreach ($petition->acquisitions as $acquisition)
					<tr>
						<td>{{$acquisition->name}}</td>
						<td>{{$acquisition->quantity}}</td>
						<td>{{$acquisition->details}}</td>
						<td>{{$acquisition->unit_type}}</td>
						@foreach ($quotations as $quotation)
							<td>{{$item->total_value}}</td>
							
						@endforeach
				@endforeach	
					</tr>
				</tbody>
		</table>
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