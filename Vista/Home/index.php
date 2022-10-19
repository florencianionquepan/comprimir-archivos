<?php 
    include_once('../../Vista/Common/Header.php');
?>

<link rel="stylesheet" href="../Assets/css/estilo.css">
<link href="http://fonts.cdnfonts.com/css/cascadia-code" rel="stylesheet">

<div class="container-md mt-3">

<div class="row align-items-center justify-content-center">
    <div class="col-10 text-center mb-3">
      <h2 class='display-4'>Comprimir y descomprimir archivos Zip<h2>
    </div>
</div>
<div id="indexElement">  
  <img class="img-fluid mb-3" id="imgIndex" src="../Assets/img/zip.png" alt="zip"/>
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
      <h3>Metodos utilizados generar zip (FALTAN AGREGAR LOS PARAMETROS)</h3>
    </div>
  </div>
  <div class="row align-items-center justify-content-center">
    <div class="col-10 col-md-6 col-lg-5">
    <a href='https://www.php.net/manual/es/ziparchive.open' class='cascadia-code'>ZipArchive::open()</a><br>
    <a href='https://www.php.net/manual/es/ziparchive.addfile' class='cascadia-code'>ZipArchive::addFile()</a><br>
    <a href='https://www.php.net/manual/es/ziparchive.close' class='cascadia-code'>ZipArchive::close()</a><br>
    </div>
    <div class="col-10 col-md-6 col-lg-5">
    <a href='https://www.php.net/manual/es/ziparchive.open' class='cascadia-code'>PclZip::add($file);</a><br>
    <a href='https://www.php.net/manual/es/ziparchive.addfile' class='cascadia-code'>ZipArchive::addFile()</a><br>
    <a href='https://www.php.net/manual/es/ziparchive.close' class='cascadia-code'>ZipArchive::close()</a><br>
    </div>
  </div>
  <div class="row align-items-center justify-content-center">
    <div class="col-10 text-center pt-3">
      <h3>Metodos utilizados descomprimir</h3>
    </div>
    <div class="row align-items-center justify-content-center">
    <div class="col-10 col-md-6 col-lg-5">
    <a href='https://www.php.net/manual/es/ziparchive.open' class='cascadia-code'>ZipArchive::open()</a><br>
    <a href='https://www.php.net/manual/en/ziparchive.extractto.php'>ZipArchive::extractTo()</a><br>
    <a href='https://www.php.net/manual/es/ziparchive.close' class='cascadia-code'>ZipArchive::close()</a><br>
    </div>
    <div class="col-10 col-md-6 col-lg-5">
    <a href='https://wp-kama.com/function/PclZip::extract' class='cascadia-code'>PclZip::extract()</a><br>
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