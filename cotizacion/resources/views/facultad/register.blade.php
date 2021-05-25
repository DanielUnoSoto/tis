@extends('users.admin.layoutadmin')

@section('mycontent')
<link href="../css/login.css" rel="stylesheet">
<div class="d-flex justify-content-center text-center containerPrincipal">
  <form method="POST" action="{{ route('facultades.store') }}" class="bg-light">
    <label class="title-inicio">
      <h2><b>
        Registro de facultades
      </b></h2>
  
    </label>
    @csrf
    <div class="form-group">
      <br>
        <label for="inputFacName" class="form-label">Nombre:</label>
        <input type="text" name="name" id="inputFacName" size="25" required autofocus>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary" style="background-color: rgb(46, 46, 46)">Registrar</button>
      </div>
  </form>
</div>
@stop