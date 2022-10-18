<?php
include_once('./../../Vista/Common/Header.php');
include_once("./../../Control/PclZip/C_archivoComprimidoPcl.php");

$objetoZip=new C_archivoComprimidoPcl;
$folder='./../../Uploads/';
$files=$objetoZip->obtenerArchivos($folder, $lista=[]);
$zipFile=$objetoZip->generarComprimido($files,$folder);

?>
 <div class="container-md">
    <div class="row m-5 text-center justify-content-center align-items-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-4 alert alert-secondary" role="alert">
            Ahora puedes descargar  <a class="alert-link" href='<?php echo $zipFile?>'>tu fichero ZIP ♥</a>
            </div>
    </div>
</div> 
<?php 


include_once('../Vista/Common/Footer.php')?>