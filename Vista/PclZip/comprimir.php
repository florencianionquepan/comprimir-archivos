<?php 
    include_once('../../Vista/Common/Header.php');
    include_once('../../Util/pclzip.lib.php');
    include_once("../../Control/PclZip/C_archivoComprimidoPcl.php");

    $estructura='./../../Uploads';
    $objetoZip=new C_archivoComprimidoPcl;
    $objetoZip->generarCarpeta($estructura);

?>
    
    <div class="container-md align-items-center mb-5">
        <div class="row py-5 justify-content-center">
            <div class="col-10 col-md-8 col-lg-5 py-5 my-3 cuadro justify-content-center text-center">
                <form method="post" action="accionZip.php" enctype="multipart/form-data" class="align-items-center" id = "form">
                    <input type="file" name="archivos[]" class="form-control" id="archivos[]" multiple></input>
                   <button class="btn btn-outline-secondary my-3" disabled="disabled" type="submit" id="comprimir">COMPRIMIR ARCHIVO/S</button>
                </form>
            </div>
    
            <div class="col-10 col-md-8 col-lg-5 py-5 mx-5 my-3 cuadro">

            <p id='nada' class="text-center text-muted fw-bold">Aún no existen archivos para comprimir</p>
                <table class="table" id='nombresArchivos'>
                    <tr></tr>
                </table>
            </div>
        </div>
    </div>

    <script type='text/javascript' src='../Assets/js/main.js'></script>
   
<?php
include_once('../../Vista/Common/Footer.php');
?>