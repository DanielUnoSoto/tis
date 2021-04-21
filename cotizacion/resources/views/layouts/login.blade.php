
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

	<form class="bg-light" method="post">
		@csrf	
				<label class="title-inicio">
					<h2><b>
						Inicio de sesión
					</b></h2>
	
				</label>
				<div class="form-group">
					<label>Correo Electrónico:</label>
	
					<div class="input-group">
					
						<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
	
						<input type="email" name="email" class="form-control" placeholder="Ingrese su correo">
	
					</div>
					
				</div>
	
				<div class="form-group">
					<label>Contraseña:</label>
	
					<div class="input-group">
					
						<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-lock"></i></i></span>
						</div>
					<input type="password" name="password" class="form-control" placeholder="Ingrese su contraseña">
						</div>
					</div>
				
				<br>
	
				<button type="submit" class="btn btn-primary">Ingresar</button>
	</form>
	
	</div>

