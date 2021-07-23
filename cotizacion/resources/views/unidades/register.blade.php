@extends('users.admin.layoutadmin')

@section('mycontent')
<link href="../css/login.css" rel="stylesheet">
<br>
<br>
<br>
<div class="d-flex justify-content-center text-center containerSolicitudCompleto">
  <form method="POST" action="{{ route('unidades.store') }}" class="bg-light">
  <label class="title-inicio">
		<h2><b>
			Registro de Unidades
		</b></h2>

	</label>
  <div>
  
    @csrf
    <div class="form-group">
        <label for="inputFacName" class="form-label">Nombre:</label>
        <input type="text" name="name" id="inputFacName" class="form-control" size="25" required autofocus>
    </div>
    <div class="form-group">
        <label for="inputTypeUnit" class="form-label">Tipo de unidad:</</label>
        <select name="type_id" required>
          <option selected></option>
          @foreach($types as $type)
            <option value="{{$type->id}}">{{$type->description}}</option>
          @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="inputSch" class="form-label">Facultad:</label>
        <select name="school_id" required>
          <option selected></option>
          @foreach($schools as $school)
            <option value="{{$school->id}}">{{$school->name}}</option>
          @endforeach
        </select>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary" style="background-color: rgb(46, 46, 46)">Registrar</button>
      </div>
  </form>
</div>
</div>

@stop