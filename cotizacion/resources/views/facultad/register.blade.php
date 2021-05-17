@extends('users.admin.layoutadmin')

@section('mycontent')
<div>
  <form method="POST" action="{{ route('school.store') }}">
    @csrf
    <div>
        <label for="inputFacName" class="form-label">Nombre*</label>
        <input type="text" name="name" id="inputFacName">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Registrar</button>
      </div>
  </form>
</div>
@stop