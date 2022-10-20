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
  <img class="img-fluid" id="imgIndex" src="../Assets/img/zip.png" alt="zip"/>
</div>

  <div class="row align-items-center justify-content-center border-top mt-5 instrucciones">
    <div class="col-10 col-md-6 col-lg-5 my-2">
      <h1>ZipArchive</h1>
      <p>Clase nativa de php.<br>
      Es necesario tener habilitada la extensión ZIP en el servidor que ofrece el servicio de alojamiento.</p>
    </div>
    <div class="col-10 col-md-6 col-lg-7 my-2">
      <h1>PclZip</h1>
      <p>Clase externa de php. <br>
      En ocasiones no tenemos acceso a la instalación y modificación de paquetes y configuración del servidor, 
      por lo que una buena opción es el uso de esta librería.</p>
      Ir a <a href="https://www.phpconcept.net/">Documentación Oficial</a><br>
      Ir a <a href="https://github.com/chamilo/pclzip">Documentación No oficial</a>
      <p> Software escrito por Vincent Blavet (vincent@phpconcept.net) </p>
    </div>
  </div>

  <div id="metodoCPcl" class="row align-items-center border-top justify-content-center">
    <div class="col-10 text-center pt-3">
      <h3>Métodos utilizados para generar zip</h3>
    </div>
  </div>
  <div class="row align-items-center justify-content-center">
    <div class="col-10 col-md-6 col-lg-5">
    <a href='https://www.php.net/manual/es/ziparchive.open' class='cascadia-code'>ZipArchive::open($nombreZip)</a><br>
    <a href='https://www.php.net/manual/es/ziparchive.addfile' class='cascadia-code'>ZipArchive::addFile($rutaArchivo)</a><br>
    <a href='https://www.php.net/manual/es/ziparchive.close' class='cascadia-code'>ZipArchive::close()</a><br>
    <img class="img-fluid mt-2" src="../Imagenes/generarComprimido.png">
    </div>
    <div class="col-10 col-md-6 col-lg-5">
    <a href='https://nullpoint3r.wordpress.com/2011/06/05/pclzip-trabajando-con-ficheros-comprimidos-en-php/' 
    class='cascadia-code' >PclZip::add($rutaArchivo)</a><br>
    <img class="img-fluid mt-2" src="../Imagenes/comprimidoPclzip.png">
    </div>
  </div>
  

    

  <div  id="metodoDPcl" class="row align-items-center  border-top justify-content-center mt-3 ">
    <div class="col-10 text-center pt-3 ">
      <h3>Métodos utilizados para descomprimir zip</h3>
    </div>
    
    <div class="row align-items-center justify-content-center pb-5">
    
    <div class="col-10 col-md-6 col-lg-5 ">
    <a href='https://www.php.net/manual/es/ziparchive.open' class='cascadia-code'>ZipArchive::open($rutaArchivoZip)</a><br>
    <a href='https://www.php.net/manual/en/ziparchive.extractto.php' class='cascadia-code'>ZipArchive::extractTo($ruta)</a><br>
    <a href='https://www.php.net/manual/es/ziparchive.close' class='cascadia-code'>ZipArchive::close()</a><br>
    <img class="img-fluid mt-2" src="../Imagenes/descomprimirzip.png">
    </div>
    
    <div class="col-10 col-md-6 col-lg-5">
    <a href='https://wp-kama.com/function/PclZip::extract' class='cascadia-code'>PclZip::extract($ruta)</a><br>
    <img class="img-fluid mt-2" src="../Imagenes/descomprimirpclzip.png">
    </div>
  
    </div>

    <div class="row align-items-center border-top justify-content-center mt-3">
      <div class="col-10 text-center pt-3">
        <h3>Instalación de la librería PclZip</h3><br>
      </div>
    </div>
      <div class="row align-items-center justify-content-center">
        <div class="col-10 instrucciones">
          <p>1. Descargar el siguiente script de PclZip: <a class="alert-link" download href='../../Util/pclzip.lib.php'>Libreria PclZip</a></p>      
          <p>2. Guardar la libreria en el proyecto a utilizar</p>
          <p>3. Incluir el script en los controladores de comprimir y descomprimir con <span class='cascadia-code'>include_once('[ruta]/pclzip.lib.php')</span></p> 
          <p>4. Luego ejecutar las funciones necesarias de la librería para <a href='#metodoCPcl'>COMPRIMIR</a> o <a href='#metodoDPcl'>DESCOMPRIMIR</a></p>  
    </div>
  </div>

    

  <div class="row align-items-center justify-content-center border-top mt-3">
  <div class="col-10 text-center pt-3 instrucciones">
  <h3>Otras dependencias utilizadas</h3>
    <p><a href='https://getbootstrap.com'>Bootstrap<p>
    <img class="img-fluid" src="../Imagenes/bootstrap.svg.png"></a>
    <p><a href='https://sweetalert2.github.io/'>SweetAlert2<p>
    <img class="img-fluid" src="../Imagenes/sweetalert.png"></a>
  </div>
  </div>

</div></div>
<?php
include_once('../../Vista/Common/Footer.php');
?>