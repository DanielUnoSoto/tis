@extends('empresas.layout')

@section('mycontent')

<div>
	<h1>hola que acabas de logear como empresas </h1>
	
</div>
	
<div>
<button class="btn btn-outline-primary">
    <a class="nav-link " aria-current="logout" href="{{route('empresa.logout')}}">
      Logout
    </a>
  </button>

</div>

@stop