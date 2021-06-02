@extends('users.ug.layout')

@section('mycontent')

<link href="../css/login.css" rel="stylesheet">
<br>
<br>
<br>
<div class="d-flex justify-content-center text-center containerPrincipal">
	<form class="bg-light">
	<label class="title-inicio">
		<h2><b>
			INVENTARIO:
		</b></h2>
		<ul>
			@foreach($stocks as $stock)
				<li>{{$stock->title}}</li>
			@endforeach
		</ul>

	</label>
	<div class="form-group">
  		<a class="btn btn-primary" href=" {{route('inventarios.create')}}" style="background-color: rgb(46, 46, 46); color:white"> Registrar</a>
  </div>
  
</form> 
</div>
  
@stop