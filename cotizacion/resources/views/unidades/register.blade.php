@extends('users.admin.layoutadmin')

@section('mycontent')
<br>
<br>
<br>
<div>
  <h1>Registro de Unidades</h1>
  <div>
  <form method="POST" action="{{ route('unit.store') }}">
    @csrf
    <div>
        <label for="inputFacName" class="form-label">Nombre*</label>
        <input type="text" name="name" id="inputFacName">
    </div>
    <div>
        <label for="inputTypeUnit">Tipo de unidad*</</label>
        <select name="type_id">
          <option selected></option>
          @foreach($types as $type)
            <option value="{{$type->id}}">{{$type->description}}</option>
          @endforeach
        </select>
    </div>
    <div>
        <label for="inputSch">Facultad*</label>
        <select name="school_id">
          <option selected></option>
          @foreach($schools as $school)
            <option value="{{$school->id}}">{{$school->name}}</option>
          @endforeach
        </select>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Registrar</button>
      </div>
  </form>
</div>
</div>

@stop