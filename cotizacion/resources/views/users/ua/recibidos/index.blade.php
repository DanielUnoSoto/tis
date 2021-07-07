@extends('users.ua.layout')

@section('mycontent')
<h3>solicitudes a responder:</h3>
@if(sizeof($petitions) == 0)
	<h5>no hay solicitudes para responder</h5>
@else
	@foreach($petitions as $petition)
		<a href="{{ route('recibidos.show', $petition->id)}}"> {{$petition->title}}</a>
	@endforeach
@endif
@stop