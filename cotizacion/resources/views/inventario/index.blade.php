@extends('users.ug.layout')

@section('mycontent')

<div>
	<h1>inventarios de la unidad de gastos</h1>
	<div>
  	<button>
  		<a href=" {{route('inventarios.create')}}">Registrar</a>
  	</button>
  </div>
</div> 

@stop