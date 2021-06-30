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
					<th>Cantidad</th>
					<th>Unidad</th>
					<th>Producto</th>
					@foreach($quotations as $quotation)
						<th>{{$quotation->company_name}}</th>
					@endforeach
				</tr>
				<tbody>	
					@foreach($petition->acquisitions as $acquisition)
						<tr class="table-success">
							<td> {{$acquisition->quantity}} </td>
							<td> {{$acquisition->unit_type}} </td>
							<td> {{$acquisition->details}} </td>
						</tr>
					@endforeach
					@foreach($quotations as $quotation)
							@foreach($quotation->items as $item)
								<td> {{$item->total_value}} </td>
							@endforeach
					@endforeach
					<tr>
						<td> TOTAL: </td>
						<td></td>
						<td></td>
						@foreach($quotations as $quotation)
							<td>{{$quotation->total}}</td>
						@endforeach
					</tr>
				</tbody>
			</thead>
			</table>
		
		</div>

</div>
</div>
<script type="text/javascript">
	var input = document.getElementById("valorTotal").style.color="black"; 				
</script>

@stop