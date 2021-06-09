@extends('users.admin.layoutadmin')

@section('mycontent')
<link href="../css/login.css" rel="stylesheet">
<br>
<br>
<br>
<div>
	<div>
  <h1 class="d-flex justify-content-center text-center">UNIDADES</h1>
  @foreach($units as $unit)
  	  	
  <button class="accordion">{{ $unit->name }}</button>
<div class="panelesacordion">
	<p>Facultad: {{ $unit->school->name }}</p>
	<p>tipo de unidad: {{ $unit->type->description }}</p>
</div>
	@endforeach
</div>
	<br>
  <div class="form-group justify-content-center text-center">
	 
  	<a class="btn btn-primary" href=" {{route('unidades.create')}} " style="background-color: rgb(46, 46, 46); color:white">Registrar</a>
  </div>

</div>

<script>
	var acc = document.getElementsByClassName("accordion");
	var i;
	
	for (i = 0; i < acc.length; i++) {
	  acc[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var panelesacordion = this.nextElementSibling;
		if (panelesacordion.style.display === "block") {
		  panelesacordion.style.display = "none";
		} else {
		  panelesacordion.style.display = "block";
		}
	  });
	}
	</script>

@stop