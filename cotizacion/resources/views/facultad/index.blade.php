@extends('users.admin.layoutadmin')

@section('mycontent')
<br>
<br>
<br>
<div>
  <h4>facultades</h4>
  <div>
  	<button>
  		<a href=" {{route('facultades.create')}} "> registrar</a>
  	</button>
  </div>
  <ul>
  		@foreach($facultades as $facultad)
  		<li>{{$facultad->name}}</li> 
  		@endforeach
  </ul> 
</div>

@stop