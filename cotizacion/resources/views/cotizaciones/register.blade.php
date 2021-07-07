@extends('empresas.layout')

@section('mycontent')
<link href="../css/login.css" rel="stylesheet">
<div class="d-flex justify-content-center containerSolicitudCompleto">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<form method="POST" action="{{route('cotizaciones.store', ['petition_id' => $petition->id])}}">
<div>
	<div >
		<h3 class="transformacion1 text-center font-weight-bold">Solicitud</h3>
	</div>
	<br>
	<div class= "card border-dark bg-light mb-3" >
		<div class="card-body">
		<p class="font-weight-bold" style = "float: left">Fecha: </p>
		<p> &nbsp{{$petition->created_at}}</p >
		<p class="font-weight-bold" style = "float: left">Título: </p>
		<p> &nbsp{{$petition->title}}</p >
		<p class="font-weight-bold" style = "float: left">Descripción: </p>
		<p> &nbsp{{$petition->description}}</p>
	
	<table class= "table table-hover table-bordered" >
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
				<tr >
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
	</div>
</div>
<div>
	<br>
	<h3 class= "transformacion1 text-center font-weight-bold">Formulario de Cotización</h3>
		@csrf
		<br>
<div class= "card border-dark bg-light mb-3" >
	<div class="card-body">
	<div class="row align-items-start">
		<div class="col">
		<div class="form-group">
			<label class="font-weight-bold" for="petitioner" >Solicitante del pedido:</label>
			<input class="text-capitalize form-control" type="text"  name="petitioner" id="petitioner" size="30" value=" {{$petition->unit->name}}  "  readonly>
		</div>
		</div>
		<div class="col">
		<div class="form-group">
			<label class= "font-weight-bold" for="petitioner" >Fecha:</label>
			<input class="text-capitalize form-control" type="text"  name="petitioner" id="petitioner" size="30" value=" {{date('Y-m-d')}}" readonly>
		</div>
		</div>
	</div>
		<div class="justify-content-center text-center">
		<table class="miTabla">
				<thead>
				  <tr>
					<th>Cantidad</th>
					<th>Unidad</th>
					<th>Detalle</th>
					<th nowrap>Valor unitario</th>
					<th nowrap>Valor total</th>
				  </tr>
				</thead>
				<tbody id="contenedor">
					@foreach ($petition->acquisitions as $acquisition)
					<tr id="datos2">
						<td> <input type="text" name="quantity[]" id="quantity" size="10" required class="cantidad" readonly value="{{$acquisition->quantity}}"></td>
						<td> <input type="text" name="type_unit[]" id="type_unit" size="18" required readonly value="{{{$acquisition->unit_type}}}"></td>
						<td> <input type="text" name="details[]" id="details" size="42" required autofocus> </td>
						<td> <input type="text" name="unit_value[]" id="unit_value" size="10" required autofocus class="preuni"></td>
						<td> <input class="total" type="text" name="total_value[]" id="total_value" size="10" readonly> </td>
					  </tr>	
					@endforeach
				</tbody>
			</table>
			<br>
			<div>
				<b>Total:</b>
				<input type="text" id="gran-total" class="" type="text" name="total" size="22" required readonly> 
			</div>
			
			<script>
				$(document).ready(function(e) {
				//Variables
				var html = `
					<tr>
								<td><input type="text" name="cantidad[]" class="cantidad" value="0"></td>
								<td><input type="text" name="preuni[]" class="preuni" value="0"></td>
								<td><input type="text" name="total[]" class="total" value="0" readonly></td>
					</tr>
				`;
				var maxrows = 15;
				var x = 1;
				// Asignar evento a cantidad y precio unitario
				$(document).on("change", ".cantidad", multiplicar);
				$(document).on("change", ".preuni", multiplicar);

				//agregar filas al form
				$("#add").click(function(e) {
					// Evitar que se agreguen más filas que las especificadas en maxrows
					if(x < maxrows) {
						$("#contenedor").append(html);
						x ++;
					}
				});

				//remover filas del form
				$(document).on('click', '.remove', function(e) {
					$(this).parent('tr').remove();
					x --;
					calcularTotal();
				});
			});

			function multiplicar(e) {
				let p = $(e.target).closest('tr');
				// Obtener contenedor desde el elemento que cambió
				
				// Usar .find() para obtener cantidad, precio y total
				let m1 = parseFloat($(p).find(".cantidad").val()) || 0;
				let m2 = parseFloat($(p).find(".preuni").val()) || 0;
				// Asignar cálculo al campo total
				$(p).find(".total").val(m1 * m2);
				calcularTotal();
			}

			function calcularTotal() {
				// Inicializar total
				let total = 0;
				// Recorrer totales para sumar
				$.each($('.total'), (index, item) => total += parseInt($(item).val()) || 0);
				// Mostrar total
				$('#gran-total').val(total);
			}
			 </script>
    	</div>
    		
	</form>
	</div>
	</div>
	<div class= "card border-dark bg-light mb-3" >
		<div class="card-body">
			<br>
			<div class="form-group text-start">
				<label class= "font-weight-bold" for="company_name" >Nombre de la Empresa:</label>
				<input class="form-control" type="text"  name="company_name" id="company_name" size="40" value=" {{auth('companies')->user()->name}}">
			</div>
			<div class="form-group text-start">
				<label class= "font-weight-bold" for="company_nit" >No de NIT:</label>
				<input class="form-control" type="text"  name="company_nit" id="company_nit" size="40" value="{{auth('companies')->user()->nit}}">
			</div>
			<div class="form-group text-start" >
				<label class= "font-weight-bold" for="safeguard" >Garantia(opcional):</label>
				<input class="form-control" type="text"  name="safeguard" id="safeguard" size="40">
			</div>
			<div class="form-group text-start">
				<label class= "font-weight-bold" for="company_phone" >Telefono:</label>
				<input class="form-control"  type="text"  name="company_phone" id="company_phone" size="40" value="{{auth('companies')->user()->phone}}">
			</div>
		</div>
	</div>
	<div class="d-grid gap-2 d-md-flex justify-content-md-center">
			<div style="padding-right: 5px">
				<a class="btn btn-primary" href="{{ URL::previous() }}">Volver</a>
			</div>
			<button class="btn btn-primary" type="submit">Registrar</button>        	
    	</div>
</div>
</div>

@stop