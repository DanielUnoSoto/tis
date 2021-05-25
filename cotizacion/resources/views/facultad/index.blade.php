@extends('users.admin.layoutadmin')

@section('mycontent')
<link href="../css/login.css" rel="stylesheet">
<br>
<br>
<br>
<div class="d-flex justify-content-center text-center containerPrincipal">
	<form class="bg-light">
	<label class="title-inicio">
		<h2><b>
			FACULTADES:
		</b></h2>

	</label>
	<ul>
		@foreach($facultades as $facultad)
		<li>{{$facultad->name}}</li> 
		@endforeach
	</ul>
  <div class="form-group">
  	<button class="btn btn-primary" style="background-color: rgb(46, 46, 46)">
  		<a href=" {{route('facultades.create')}} " style="color:white"> Registrar</a>
  	</button>
  </div>
  
</form> 
</div>

@stop