@extends('users.admin.layoutadmin')

@section('mycontent')
<br>
<br>
<br>
<div>
  <h1>unidades</h1>
  <button>
  		<a href=" {{route('unit.create')}} "> registrar</a>
  	</button>
  <ul>
  	@foreach($units as $unit)
  	<li> {{ $unit->name }}
  	   	<p>{{ $unit->school_id }}</p>
  		<p>{{ $unit->type_id }}</p>
  	</li> 
  	@endforeach
	@
  </ul>
</div>

@stop