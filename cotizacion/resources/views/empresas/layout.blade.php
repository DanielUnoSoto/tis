<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
    <title>Sistema Empresas</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    	<div class="collapse navbar-collapse">
	        <a href="#" class="navbar-brand">
	            <img src="../imagenes/umss.png" atl="" class="d_inline-block aling-top" height="70"
	            width="50">
	        Universidad Mayor de San Simon
	        </a>
        </div>
	    <button class="btn btn-outline-primary">
	        <a class="nav-link " aria-current="logout" href="{{route('empresa.logout')}}" >
	            Logout
	        </a>
	    </button>
          
	</nav>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href=" {{route('empresa.home')}} ">Empresa</a>
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  	</button>

  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href=" {{route('solicitudes.index')}} ">Solicitudes <span class="sr-only">(current)</span></a>
	      </li>
	    </ul>
  		</div>

  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
	    	<ul class="navbar-nav mr-auto">
	      		<li class="nav-item active">
	        		<a class="nav-link" href=" {{route('cotizaciones.index')}} ">Cotizaciones <span class="sr-only">(current)</span></a>
	      		</li>
	    	</ul>
  		</div>

	</nav>
    @yield('mycontent')
</body>
</html>