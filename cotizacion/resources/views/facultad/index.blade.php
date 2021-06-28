@extends('users.admin.layoutadmin')

@section('mycontent')
<link href="../css/login.css" rel="stylesheet">
<br>
<br>
<br>
<div class="d-flex justify-content-center text-center containerSolicitudCompleto">
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
  
  	<a class="btn btn-primary" href=" {{route('facultades.create')}} " style="background-color: rgb(46, 46, 46); color:white"> Registrar</a>

</form> 
</div>

@stop