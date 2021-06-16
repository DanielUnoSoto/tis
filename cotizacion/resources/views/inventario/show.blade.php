@extends('users.ug.layout')

@section('mycontent')
<link href="../css/login.css" rel="stylesheet">
<div class="d-flex justify-content-center  containerSolicitud">
<form class="bg-light">
	<div>
		<h2 class= "transformacion1 text-center font-weight-bold">
			Inventario: {{ $stock->title }}
		</h2>
		</br>
		<div class= "container">
			<p class="font-weight-bold" style = "float: left">Descripcion:</p>
			<p> &nbsp{{$stock->description}} </p>
			<p class="font-weight-bold" style = "float: left">Unidad: </p>
			<p class="transformacion1">&nbsp{{$stock->unit->name}} </p>
			<p class="font-weight-bold" style = "float: left">Año: </p>
			<p>&nbsp{{$stock->year}} </p>
		</div>
		</br>
		<div>
			<h3>Artículos</h3>
			<table class= "table-dark " width="1000" border="1"  >
				<thead>
					<tr>
						<th>Codigo</th>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Cantidad</th>
					</tr>
				</thead>
				<tbody>
					
					@foreach($stock->articles as $article)
						<tr>
							<td> {{$article->code}} </td>
							<td> {{$article->name}} </td>
							<td> {{$article->description}} </td>
							<td> {{$article->quantity}} </td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{{-- <a href="{{redirect()->back()}}">Atras</a> --}}
		</div>
	</div>
</form>
</div>
@stop