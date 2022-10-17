<?php 
    include_once('../../Vista/Common/Header.php');
    include_once("../../Control/ZipArchive/C_archivoComprimido.php");
/*     
    if(file_exists('../../Vista/ZipArchive/Comprimidos.zip')){
        unlink('../../Vista/ZipArchive/Comprimidos.zip');
    }

    $carpeta = @scandir('../../Uploads');
    $files=[];
        if (count($carpeta) > 2){
            if($handler=opendir('../../Uploads')){
                while(false !== ($file=readdir($handler))){
                    array_push($files,$file);
                }
                closedir($handler);
            }

            $zip=new C_archivoComprimido;
            $zip->limpiarDirectorio($files);
        }     */
?>
    
    <div class="container-md align-items-center mb-5">
        <div class="row py-5 justify-content-center">
            <div class="col-10 col-md-8 col-lg-5 py-5 my-3 cuadro justify-content-center text-center">
                <form method="post" action="accionZip.php" enctype="multipart/form-data" class="align-items-center" id = "form">
                    <input type="file" name="archivos[]" id='archivos' class="form-control" id="archivos[]" multiple></input>
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

    <script type='text/javascript' src='../Assets/js/java.js'></script>
    <script type='text/javascript' src='../Assets/js/js.js'></script>
   
<?php
include_once('../../Vista/Common/Footer.php');
?>