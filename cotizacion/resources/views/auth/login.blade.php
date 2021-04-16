

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!--Ultima version de fotawesome-->
<script src="https://kit.fontawesome.com/f5ab984d8e.js" crossorigin="anonymous"></script>

	<link href="css/login.css" rel="stylesheet">



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse">
        <a href="/" class="navbar-brand">
            <img src="imagenes/umss.png" atl="" class="d_inline-block aling-top" height="70"
            width="50">
        Universidad Mayor de San Simon
        </a>
        </div>
    <button class="btn btn-outline-primary">
        <a class="nav-link " aria-current="login" href="/" >
            Home
        </a>
    </button>
          
</nav>
	<br> <br> <br> <br>


<div class="d-flex justify-content-center text-center containerPrincipal">

	<form class="bg-light" method="post" action="{{ route('login') }}">
		@csrf	
				<label class="title-inicio">
					<h2><b>
						Inicio de sesión
					</b></h2>
	
				</label>
				<div class="form-group">
					<label>{{ __('Correo Electrónico:') }}</label>
	
					<div class="input-group">
					
						<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
	
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Ingrese su correo">
						
						@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

					</div>
					
				</div>
	
				<div class="form-group">
					<label for="password">{{ __('Contraseña:') }}</label>
	
					<div class="input-group">
					
						<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-lock"></i></i></span>
						</div>
					<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Ingrese su contraseña">
						
						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
						
					</div>
				</div>
				
				<br>
	
				
				<button type="submit" class="btn btn-primary">{{ __('Ingresar') }}</button>

				
	</form>
	
	</div>

   