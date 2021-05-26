@extends('users.ug.layout')

@section('mycontent')

<div>
	<h1>inventarios</h1>
	<div>
	<ul>
		@foreach($stocks as $stock)
			<li>{{$stock->title}}</li>
		@endforeach
	</ul>
  	<button>
  		<a href=" {{route('inventarios.create')}}">Registrar</a>
  	</button>
  </div>
</div> 

@stop