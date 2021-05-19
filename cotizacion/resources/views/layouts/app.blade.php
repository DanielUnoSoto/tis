<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/png" href="{{ asset('/img/favicon_192x192.png') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('/img/favicon_192x192.png') }}">
	<title>Incia Sesion</title>
</head>
<body>

	<nav>
		@auth

			{{-- @if(auth()->user()->role_id === 1)
				<a href="{{route('register')}}">registrar</a>
			@endif
			 --}}
			@if(auth()->user()->role_id === 3)
				{{-- <a href=" {{route('quotation')}} ">cotizaciones</a> --}}
				<a href="#">cotizaciones</a>
			@endif

			@if(auth()->user()->role_id === 3 || auth()->user()->role_id === 2)
				{{-- <a href=" {{route('requisition')}} ">solicitudes</a> --}}
				<a href="#">solicitudes</a>
			@endif 
			
			<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            cerrar sesion</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
			{{-- <a href="{{ route('logout') }}">logout</a> --}}
		@else
			<a href="{{ route('login') }}">login</a>
			<a href="{{route('registrar.create')}}">registrar</a>
		@endauth
	</nav>

	@yield('content')
</body>
</html>