@extends('users.admin.layoutadmin')

@section('mycontent')
<link href="../css/login.css" rel="stylesheet">
   <div class="d-flex justify-content-center text-center containerPrincipal">
	<form class="bg-light">
	  <label class="title-inicio">
		<h2><b>
			empresas se veran aqui:
		</b></h2>

	</label>
   	<div class="form-group">
	  	<button class="btn btn-primary" style="background-color: rgb(46, 46, 46)">
	  		<a href=" {{route('empresas.create')}} " style="color:white"> Registrar</a>
	  	</button>
	  </div>
	</form>   
   </div>
@stop