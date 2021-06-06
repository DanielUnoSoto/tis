@extends('users.ug.layout')

@section('mycontent')

<div>
	<form method="POST" action="{{ route('solicitudes.store') }}" class="bg-light">
    <label class="title-inicio">
      <h2><b> Nueva solicitud </b></h2>
    </label>
    @csrf
    <div class="form-group">
      <br>
        <label for="title" class="form-label">Titulo:</label>
        <input type="text" name="title" id="title" size="25">
    </div>
    <div class="form-group">
        <br>
        <label for="description" class="form-label">descripcion:</label>
        <input type="text" name="description" id="description" size="25">
    </div>
    <h2><b> adquirir </b></h2>
      <table>
      <thead>
        <tr>
          <th>nombre</th>
          <th>detalle</th>
          <th>Cantidad</th>
        </tr>
      </thead>
      <tbody>
          <tr>
            <td> <input type="text" name="name" id="name" > </td>
            <td> <input type="text" name="details" id="details" size="25"> </td>
            <td> <input type="text" name="quantity" id="quantity" size="25"> </td>
          </tr>
      </tbody>
    </table>
    <br>
    <div class="col-12">
        <button type="submit">Registrar</button>
    </div>
  </form>
</div>

@stop