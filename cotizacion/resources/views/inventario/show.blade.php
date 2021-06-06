@extends('users.ug.layout')

@section('mycontent')

<div>
	<h3>
		Inventario: {{ $stock->title }}
	</h3>

	<div>
		<p>descripcion: {{$stock->description}} </p>
		<p>Unidad: {{$stock->unit->name}} </p>
		<p>Año: {{$stock->year}} </p>
	</div>

	<div>
		<h3>Articulos</h3>
		<table width="50%" border="1" >
			<thead>
				<tr>
					<th>Codigo</th>
					<th>nombre</th>
					<th>descripcion</th>
					<th>cantidad</th>
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
		{{-- <a href="{{redirect()->back()}}">atras</a> --}}
	</div>
</div>

@stop