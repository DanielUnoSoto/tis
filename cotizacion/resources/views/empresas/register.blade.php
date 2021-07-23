@extends('users.admin.layoutadmin')

@section('mycontent')

<link href="../css/registroEmpresas.css" rel="stylesheet">
<div class="d-flex justify-content-center text-center form-register">

<form class="bg-light" method="POST" action=" {{route('empresas.store')}} ">
<div  class="title-inicio">
	<h2><b>Registro de Empresas</b></h2>
	
	<br>		
			@csrf
			<div class="form-group">
				<label for="inputName4" class="form-label">Nombre:</label>
				<input type="text" class="form-control" name="name" id="inputName4" placeholder="Ingrese sus nombres" size="40" required autofocus>
			</div>
			<div class="form-group">
				<label for="inputEmail4" class="form-label">Email:</label>
				<input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Ingrese su dirección de correo" size="40" required>
			</div>
			<div class="form-group">
				<label for="inputPassword4" class="form-label">Contraseña:</label>
				<input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Ingrese su contraseña" size="40" required>
			</div>
			<div class="form-group">
				<label for="inputArea" class="form-label">Área:</label>
				<select class="form-select" name="area" required>
		          <option value="">--Seleciona un área--</option>
		          @foreach($areas as $area)
		            <option value='{{ $area->id }}'>{{$area->description}}</option>
		          @endforeach
        		</select>
			</div>
			<div class="form-group">
				<label for="inputDescrip" class="form-label">Descripción:</label>
				<input type="text" class="form-control" name="descrip" id="descrip" placeholder="Ingrese una breve descripción" size="40" required>
			</div>
         <div class="form-group">
				<label for="inputDir" class="form-label">Dirección:</label>
				<input type="text" class="form-control" name="direction" id="direction" placeholder="Ingrese su dirección" size="40" required>
			</div>
         <div class="form-group">
				<label for="inputNit" class="form-label">NIT:</label>
				<input type="tel" class="form-control" name="nit" id="nit" placeholder="Ingrese su NIT" size="40" required>
			</div>
         <div class="form-group">
				<label for="inputCity" class="form-label">Ciudad:</label>
				<input type="text" class="form-control" name="city" id="city" placeholder="Ingrese su ciudad" size="40" required>
			</div>
         <div class="form-group">
				<label for="inputTelf" class="form-label">Teléfono:</label>
				<input type="tel" class="form-control" name="phone" id="inputTelf" placeholder="Ingrese su número de teléfono" size="40" required>
			</div>
			
			<div class="col-12">
				<button type="submit" class="btn btn-primary" style="background-color: rgb(46, 46, 46)">Registrar</button>
			</div>
		
	  </div>
	
</form>

</div>

@stop