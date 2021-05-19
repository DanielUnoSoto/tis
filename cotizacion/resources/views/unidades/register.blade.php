@extends('users.admin.layoutadmin')

@section('mycontent')
<style>
	.containerPrincipal {
  
  position: absolute;
  
  left: 50%;
  top: 60%;
  transform: translate(-50%, -50%);
  border: 2px solid rgb(46, 46, 46);
  padding:  50px;
  margin-top: 25px;
  background-color: rgb(245, 244, 243);
  
}

.title-inicio{
  font-size:larger;
  color:rgb(0, 0, 0);
}
@media(max-width:360px){
  .containerPrincipal {
    width: 80%;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    border: 2px solid rgba(124, 210, 250, 0.623);
    padding:  20px;
    margin-left: 0;
    margin-right: 0;
    background-color: rgb(245, 244, 243);

  }
  

}
</style>
<br>
<br>
<br>
<div class="d-flex justify-content-center text-center containerPrincipal">
  <form method="POST" action="{{ route('unit.store') }}" class="bg-light">
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
        <select name="type_id">
          <option selected></option>
          @foreach($types as $type)
            <option value="{{$type->id}}">{{$type->description}}</option>
          @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="inputSch" class="form-label">Facultad:</label>
        <select name="school_id">
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