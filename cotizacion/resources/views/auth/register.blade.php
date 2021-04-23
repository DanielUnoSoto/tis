
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!--Ultima version de fotawesome-->
<script src="https://kit.fontawesome.com/f5ab984d8e.js" crossorigin="anonymous"></script>





<link href="css/register.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse">
        <a href="/" class="navbar-brand">
            <img src="imagenes/umss.png" atl="" class="d_inline-block aling-top" height="70"
            width="50">
        Universidad Mayor de San Simon
        </a>
        </div>
	<button class="btn btn-outline-primary">
        <a class="nav-link " aria-current="logout" href="administracion" >
            Volver
        </a>
    </button>
</nav>

<br>

<br>
<br>
<div class="d-flex justify-content-center text-center form-register">
  
	
	<form class="bg-light">
	
		<label class="title-inicio">
			<h2><b>
				Registro de Usuarios
			</b></h2>

	<div class="form-group">
			<b><label for="inputName" class="form-label">Nombre</label></b>
			<input type="text" class="form-control" id="inputNombres" placeholder="Ingrese sus nombres" size="40" required autofocus>
	</div>
	<div class="form-group">
		<b><label for="inputLastName" class="form-label">Apellido</label></b>
		<input type="text" class="form-control" id="inputApellidos" placeholder="Ingrese sus apellidos" size="40" required>
	</div>
	<div class="form-group">
		<b><label for="inputTelf" class="form-label">Teléfono</label></b>
		<input type="tel" class="form-control" id="inputTelf" placeholder="Ingrese su número de teléfono" size="40" required>
	</div>
	<div class="form-group">
		<b><label for="inputEmail4" class="form-label">Correo electrónico</label></b>
		<input type="email" class="form-control" id="inputEmail4" placeholder="Ingrese su dirección de correo" size="40" required>
	</div>
	<div class="form-group">
		<b><label for="inputPassword4" class="form-label">Contraseña</label></b>
		<input type="password" class="form-control" id="inputPassword4" placeholder="Ingrese su contraseña" size="40" required>
	</div>
	<div class="form-group">
		<b><label for="inputConfPassword4" class="form-label">Confirmar contraseña</label></b>
		<input type="password" class="form-control" id="inputConfPassword4" placeholder="Confirme su contraseña" size="40" required>
	</div>
	
		<div class="form-group">
			<label for="inputRol" class="form-label">Seleccione Rol</label>
				<select class="form-select" required>
					<option selected></option>
					<option value="1">Administrador</option>
					<option value="2">Unidad Administrativa</option>
					<option value="3">Unidad de Gastos</option>
				</select>

		</div>
		
			<button type="submit" class="btn btn-primary">Registrar</button>
		
		
		
	</form>
	</div>

