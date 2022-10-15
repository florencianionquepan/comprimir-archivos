<?php 
    include_once('../../Vista/Common/Header.php');
    
    if(file_exists('../../Vista/ZipArchive/Comprimidos.zip')){
        unlink('../../Vista/ZipArchive/Comprimidos.zip');
    }
?>
    
    <div class="container-md align-items: center mb-5">
        <div class="row pt-5 pb-5 ">
            <div class="col row pt-5 pb-5 mx-5 justify-content-center">
                <form method="post" action="accionZip.php" enctype="multipart/form-data" class="col-8 row align-items-center needs-validation" id = "form" novalidate>
                    <input type="file" name="archivos[]" id='archivos' class="form-control" id="archivos[]" multiple required></input>
                   <button class="btn btn-outline-secondary my-3" type="submit" id="comprimir">COMPRIMIR ARCHIVO/S</button>
                </form>
            </div>
    
            <div class="col row pt-5 pb-5 mx-5 justify-content-center">

            <!-- <p class="text-center text-muted fw-bold">Aún no hay archivos para comprimir</p>-->
                <table class="table" id='nombresArchivos'>
                    <tr></tr>
                </table>
            </div>
        </div>
    </div>

    <script type='text/javascript' src='../Assets/js/javas.js'></script>
    <script type='text/javascript' src='../Assets/js/js.js'></script>
   
<?php
include_once('../../Vista/Common/Footer.php');
?>