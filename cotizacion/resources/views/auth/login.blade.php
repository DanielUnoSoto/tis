

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

		<div style="padding-right: 5px">
		<button class="btn btn-outline-primary px-1">
			<a class="nav-link " aria-current="login" href=" {{route('empresa.login') }} " >
				Empresas
			</a>
		</button>
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
					<br>
					<input type="checkbox" onclick="myFunction()"> Mostrar contraseña
							<script>
								function myFunction() {
								var x = document.getElementById("password");
								if (x.type === "password") {
									x.type = "text";
								} else {
									x.type = "password";
								}
								}
							</script>
				</div>
				
				
				<div class="form-group">	
					<p id="text">¡ADVERTENCIA! <br>Mayúsculas está activado.</p>
				</div>
				
				<button type="submit" class="btn btn-primary">{{ __('Ingresar') }}</button>
				<script>
					var input = document.getElementById("email");  
					var input2 = document.getElementById("password");
					var text = document.getElementById("text");
					input.addEventListener("keyup", function(event) {
					
					if (event.getModifierState("CapsLock")) {
						text.style.display = "block";
					  } else {
						text.style.display = "none"
					  }
					});
					input2.addEventListener("keyup", function(event) {
					
					if (event.getModifierState("CapsLock")) {
						text.style.display = "block";
					  } else {
						text.style.display = "none"
					  }
					});
					
					</script>

				
	</form>
	
	</div>

   