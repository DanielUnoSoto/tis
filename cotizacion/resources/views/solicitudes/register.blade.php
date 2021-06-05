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
        <label for="title" class="form-label">Title:</label>
        <input type="text" name="title" id="title" size="25">
    </div>
    <div class="form-group">
      <br>
        <label for="description" class="form-label">Description:</label>
        <input type="text" name="description" id="description" size="25">
    </div>
    <div class="col-12">
        <button type="submit">Registrar</button>
    </div>
  </form>
</div>

@stop