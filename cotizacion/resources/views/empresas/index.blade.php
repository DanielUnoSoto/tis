@extends('users.admin.layoutadmin')

@section('mycontent')
   <div>
      <h1>empresas se veran aqui</h1>
   	<div class="form-group">
	  	<button class="btn btn-primary" style="background-color: rgb(46, 46, 46)">
	  		<a href=" {{route('empresas.create')}} " style="color:white"> Registrar</a>
	  	</button>
	  </div>
   </div>
@stop