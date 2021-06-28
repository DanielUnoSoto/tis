@extends('users.admin.layoutadmin')

@section('mycontent')
<link href="../css/login.css" rel="stylesheet">
   <div class="d-flex justify-content-center text-center containerSolicitudCompleto">
	<form class="bg-light">
	  <label class="title-inicio">
		<h2><b>
			Empresas registradas
		</b></h2>
		<ul>
			@foreach($companies as $company)
				<li>{{$company->name}}</li>
			@endforeach
		</ul>

	</label>
   	<div class="form-group">
	  		<a class="btn btn-primary" href=" {{route('empresas.create')}} " style="background-color: rgb(46, 46, 46); color:white"> Registrar</a>
	  </div>
	</form>   
   </div>
@stop