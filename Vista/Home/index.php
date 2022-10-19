<?php 
    include_once('../../Vista/Common/Header.php');
?>

<link rel="stylesheet" href="../Assets/css/estilo.css">

<div id="indexElement">  
  <img class="img-fluid mt-5" id="imgIndex" src="../Assets/img/zip.png" alt="zip"/>
</div>

<div class="container-md mb-5 mt-5">

  <div class="row align-items-center justify-content-center">
    <div class="col-10 text-center mb-3">
      <h2 class='display-4'>Comprimir y descomprimir archivos Zip<h2>
    </div>
  </div>
  <div class="row align-items-center text-center justify-content-center">
    <div class="col-10 col-md-6 col-lg-5">
      <h1>ZipArchive<h1>
    </div>
    <div class="col-10 col-md-6 col-lg-5">
      <h1>PclZip<h1>
    </div>
  </div>
  <div class="row align-items-start justify-content-center">
    <div class="col-10 col-md-6 col-lg-5">
    Clase nativa de php.<br>
    Es necesario tener habilitada la extensión ZIP en el servidor que ofrece el servicio de alojamiento.
    </div>
    <div class="col-10 col-md-6 col-lg-5">
      Clase externa de php. <br>
    En ocasiones no tenemos acceso a la instalación y modificación de paquetes y configuración del servidor, por lo que una buena opción es el uso de esta librería.
    </div>
  </div>
  <div class="row align-items-center justify-content-center">
    <div class="col-10 text-center pt-3">
      <h3>Metodos utilizados generar zip</h3>
    </div>
  </div>
  <div class="row align-items-center justify-content-center">
    <div class="col-10 col-md-6 col-lg-5">
    <a href='https://www.php.net/manual/es/ziparchive.open'>ZipArchive::open()</a><br>
    <a href='https://www.php.net/manual/es/ziparchive.addfile'>ZipArchive::addFile()</a><br>
    <a href='https://www.php.net/manual/es/ziparchive.addfile'>ZipArchive::close()</a><br>
    </div>
    <div class="col-10 col-md-6 col-lg-5">
      
    </div>
  </div>
  <div class="row align-items-center justify-content-center">
    <div class="col-10 text-center pt-3">
      <h3>Metodos utilizados descomprimir</h3>
    </div>
    <div class="row align-items-center justify-content-center">
    <div class="col-10 col-md-6 col-lg-5">
    ZipArchive::open()
    ZipArchive::extractTo()
    ZipArchive::close()
    </div>
    <div class="col-10 col-md-6 col-lg-5">
      
    </div>
  </div>

  <div class="row align-items-center justify-content-center">
  <div class="col-10 text-center pt-3">
  <h3>Otras dependencias utilizadas</h3>
    <p><a href='https://getbootstrap.com'>Bootstrap</a><p>
    <p><a href='https://sweetalert2.github.io/'>SweetAlert2</a><p>
  </div>
  </div>

</div>
<?php
include_once('../../Vista/Common/Footer.php');
?>