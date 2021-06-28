@extends('users.ug.layout')

@section('mycontent')
<link href="../css/login.css" rel="stylesheet">
<div class="d-flex justify-content-center text-center containerSolicitud">
	<form method="POST" action="{{ route('solicitudes.store') }}" class="bg-light">
    <label class="title-inicio">
      <h2><b> Nueva solicitud </b></h2>
    </label>
    @csrf
    <div class="form-group">
      <br>
        <label for="title" class="form-label">Título:</label>
        <input type="text" name="title" id="title" size="25" required autofocus>
    </div>
    <div class="form-group">
        <br>
        <label for="description" class="form-label">Descripción:</label>
        <input type="text" name="description" id="description" size="25" required>
    </div>
    <h2><b> Adquirir </b></h2>
      <table>
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Detalle</th>
          <th>Unidad</th>
          <th>Cantidad</th>
        </tr>
      </thead>
      <tbody>
          @for ($i = 1; $i <= 2; $i++)
            <tr>
              <td> <input type="text" name="name[]" id="name" > </td>
              <td> <input type="text" name="details[]" id="details" size="25"> </td>
              <td> <input type="text" name="unit_type[]" id="unit_type" size="25"> </td>
              <td> <input type="text" name="quantity[]" id="quantity" size="25"> </td>
            </tr>
          @endfor
      </tbody>
    </table>
    <br>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Registrar</button>
    </div>
  </form>
  estoy aquiiiiiii
</div>

@stop