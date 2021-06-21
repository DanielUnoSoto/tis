@extends('empresas.layout')

@section('mycontent')
<div>
	<h4>cotizaiciones</h4>
	<ul>
		@foreach($quotations as $quotation)
			<li>
				<a href="#"> {{$quotation->details}} </a>
			</li>
		@endforeach
	</ul>
</div>
@stop