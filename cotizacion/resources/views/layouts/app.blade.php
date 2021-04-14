<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<nav>
		@auth

			{{-- @if(auth()->user()->role_id === 1)
				<a href="{{route('register')}}">registrar</a>
			@endif
			
			@if(auth()->user()->role_id === 3)
				<a href=" {{route('quotation')}} ">cotizaciones</a>
				
			@endif

			@if(auth()->user()->role_id === 3 || auth()->user()->role_id === 2)
				<a href=" {{route('requisition')}} ">solicitudes</a>
			@endif --}}

			
			<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            cerrar sesion</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
			{{-- <a href="{{ route('logout') }}">logout</a> --}}
		@else
			<a href="{{ route('login') }}">login</a>
			<a href="{{route('register')}}">registrar</a>
		@endauth
	</nav>

	@yield('content')
</body>
</html>