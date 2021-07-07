@extends('users.ug.layout')

@section('mycontent')
<link href="../css/login.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/f5ab984d8e.js" crossorigin="anonymous"></script>
<div class="d-flex justify-content-center text-center containerSolicitudCompleto">
	<form method="POST" action="{{ route('solicitudes.store') }}" class="bg-light">
    <label class="title-inicio">
      <h2><b> Nueva solicitud </b></h2>
    </label>
    @csrf
    <div class="form-group">
      <br>
        <label for="title" class="form-label"><b>Título:</b></label>
        <input type="text" name="title" id="title" size="25" required autofocus>
    </div>
    <div class="form-group" style="padding-right: 42px">
        <br>
        <label for="description" class="form-label"><b>Descripción:</b></label>
        <input type="text" name="description" id="description" size="25" required>
    </div>
    <h2><b> Adquirir </b></h2>
    <button type="button" class="btn btn-primary  rounded-pill" onclick="agregarFila()"><i class="fas fa-plus-square"></i> Agregar fila</button>
    <button type="button" class="btn btn-primary  rounded-pill" onclick="eliminarFila()"><i class="fas fa-minus-square"></i> Eliminar fila</button>  
      <table class="table">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Detalle</th>
          <th>Unidad</th>
          <th>Cantidad</th>
        </tr>
      </thead>
      <tbody>
            <tr>
              <td> <input type="text" name="name[]" id="name" > </td>
              <td> <input type="text" name="details[]" id="details" size="25"> </td>
              <td> {{-- <input type="text" name="unit_type[]" id="unit_type" size="25"> --}}
                <select class="form-select" name="unit_type[]">
                    <option selected></option>
                    <option value="pieza">pieza</option>
                    <option value="paquete">paquete</option>
                </select>
              </td>
              <td> <input type="text" name="quantity[]" id="quantity" size="25"> </td>
            </tr>
      </tbody>
    </table>
    <br>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Registrar</button>
    </div>
  </form>
</div>
<script>
  var myTable = document.querySelector("table"); 
       function agregarFila(){ 
        var row = myTable.insertRow(myTable.rows.length);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        cell1.innerHTML = '<input type="text" name="name[]" id="name" >';
        cell2.innerHTML = '<input type="text" name="details[]" id="details" size="25">';;
        cell3.innerHTML = '<select class="form-select" name="unit_type[]"><option selected></option><option value="pieza">pieza</option><option value="paquete">paquete</option></select>';;
        cell4.innerHTML = '<input type="text" name="quantity[]" id="quantity" size="25">';;
       }
  
       function eliminarFila(){
        var rowCount = myTable.rows.length;
        if(rowCount <= 1) {
          alert('No se puede eliminar el encabezado');
        } else {
          myTable.deleteRow(rowCount -1);
        }
    
       }
</script>

@stop