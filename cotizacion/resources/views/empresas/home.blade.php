@extends('empresas.layout')

@section('mycontent')
<link href="../css/landingUsers.css" rel="stylesheet">
<!--Ultima version de fotawesome-->
<script src="https://kit.fontawesome.com/f5ab984d8e.js" crossorigin="anonymous"></script>

<div class="text-center contenedor" class="fw-bold">
  <div class="letras1">
    <h3>BIENVENIDO AL SISTEMA DE EMPRESAS</h3>
  </div>
  <div class="letras2">
    <h3>GESTIÓN ADMINISTRATIVA: 1/2021 </h3>
  </div>
  
</div>
<div class="contenedor" class="fw-bold">
  <div class="text-center caja1">
    <h2>INFORMACIÓN PERSONAL:</h2>
    <br>
    <h6> <b>Empresa: </b> {{$company->name}} </h6><br>
    <h6> <b>Descripción: </b> {{$company->description}} </h6><br>
    <h6> <b>Area: </b> {{$company->area}} </h6><br>
    <h6> <b>Dirección: </b> {{$company->direction}} </h6><br>
    <h6> <b>Ciudad: </b> {{$company->city}} </h6><br>
  </div>
  <div class="caja2">
    <h2 class="text-center">AVISOS IMPORTANTES</h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext"></div>
    <div class="text-center"><img class="justify-content-center" src="../imagenes/congrats.jpg" width="170" height="170"></div>
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption">Felicidades se te ha adjudicado la cotización: <a href="#"> NOMBRE COTIZACION </a></p>
  </div>

</div>
<script>
  var slideIndex = 1;
  showSlides(slideIndex);
  
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
  }
  </script>
  </div>
  </div>  
@stop