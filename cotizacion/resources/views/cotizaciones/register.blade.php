@extends('empresas.layout')

@section('mycontent')
<link href="../css/login.css" rel="stylesheet">
<div class="d-flex justify-content-center containerSolicitudCompleto">
	<form method="POST" action="{{route('cotizaciones.store', ['petition_id' => $petition->id])}}">
<div>
	<div >
		<h3 class="transformacion1 text-center font-weight-bold">Solicitud</h3>
	</div>
	<br>
	<div class= "card border-dark bg-light mb-3" >
		<div class="card-body">
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
			<button type="button" class="btn btn-primary  rounded-pill" onclick="agregarFila()"><i class="fas fa-plus-square"></i> Agregar fila</button>
			<button type="button" class="btn btn-primary  rounded-pill" onclick="eliminarFila()"><i class="fas fa-minus-square"></i> Eliminar fila</button>  
			<table class="miTabla">
				<thead>
				  <tr>
					<th>Cantidad</th>
					<th>Unidad</th>
					<th>Detalle</th>
					<th>Valor unitario</th>
					<th>Valor total</th>
				  </tr>
				</thead>
				<tbody>
					<tr>
					  <td> <input type="text" name="quantity[]" id="quantity" size="20" class="monto" onkeyup="multi();" required autofocus> </td>
					  <td> <input type="text" name="type_unit[]" id="type_unit" size="20" required autofocus> </td>
					  <td> <input type="text" name="details[]" id="details" size="20" required autofocus> </td>
					  <td> <input type="text" name="unit_value[]" id="unit_value" size="20" class="monto" onkeyup="multi();" required autofocus> </td>
					  <td> <input type="text" name="total_value[]" id="total_value" size="20"> </td>
					</tr>
				</tbody>
			</table>
			<div class="form-group">
				<label for="total" >Total: </label>
				<input class= "form-control"type="text" name="total" id="total" size="40">
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
			 <script>
				var myTable = document.querySelector(".miTabla"); 
					 function agregarFila(){ 
					  var row = myTable.insertRow(myTable.rows.length);
					  var cell1 = row.insertCell(0);
					  var cell2 = row.insertCell(1);
					  var cell3 = row.insertCell(2);
					  var cell4 = row.insertCell(3);
					  var cell5 = row.insertCell(4);
					  cell1.innerHTML = '<input type="text" name="quantity[]" id="quantity" size="20" class="monto" onkeyup="multi();" required autofocus>';
					  cell2.innerHTML = '<input type="text" name="type_unit[]" id="type_unit" size="20" required autofocus>';;
					  cell3.innerHTML = '<input type="text" name="details[]" id="details" size="20" required autofocus>';;
					  cell4.innerHTML = '<input type="text" name="unit_value[]" id="unit_value" size="20" class="monto" onkeyup="multi();" required autofocus>';;
					  cell5.innerHTML = '<input type="text" name="total_value[]" id="total_value" size="20">';;
					 }
				
					 function eliminarFila(){
					  var rowCount = myTable.rows.length;
					  if(rowCount <= 1) {
						alert('No se puede eliminar el encabezado');
					  } else {
						myTable.deleteRow(rowCount -1);
					  }
				  
					 }
			  </script>
			 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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