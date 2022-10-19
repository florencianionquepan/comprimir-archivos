<?php 
    include_once('../../Vista/Common/Header.php');
?>

<link rel="stylesheet" href="../Assets/css/estilo.css">

<div id="indexElement">  
  <img class="img-fluid mt-5" id="imgIndex" src="../Assets/img/zip.png" alt="zip"/>
</div>

<div class="container text-center mb-5 mt-5">

  <div class="row align-items-start">
    <div class="col mb-5">
      <h2>Comprimir y descomprimir archivos Zip<h2>
    </div>
  </div>
  <div class="row align-items-start">
    <div class="col">
      <h1>ZipArchive<h1>
    </div>
    <div class="col">
      <h1>PclZip<h1>
    </div>
  </div>
  <div class="row align-items-center">
    <div class="col">
    Una de las formas más sencillas de comprimir y descomprimir archivos es utilizar la clase ZipArchive que es nativa de php
    pero esta tiene el inconveniente de que es necesario tener habilitada la extensión ZIP en el servidor que ofrece el servicio de alojamiento.
    </div>
    <div class="col">
    En ocasiones no tenemos acceso a la instalación y modificación de paquetes y configuración del servidor, por lo que una buena opción es el uso de esta librería.
    </div>
  </div>
  <div class="row align-items-end">
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
</div>
<?php
include_once('../../Vista/Common/Footer.php');
?>