<?php include_once('../../Vista/Common/Header.php');

$objetoDescomprimir=new C_archivoDescomprimidoPcl;
$carpetaGenerada=$objetoDescomprimir->generarCarpeta();

?>
    <div class="container-md">
        <div class="row m-5 text-center justify-content-center align-items-center">
            <form method="post" action="accionDescomprimirPcl.php" enctype="multipart/form-data" class=" cuadro py-5 m-3 col-12 col-md-8 col-lg-6 col-xl-4">
                    <input type="file" name="zip" class="form-control" id="zip">
                    <button class="btn btn-outline-secondary my-3" disabled="disabled" type="submit" id="descomprimir">DESCOMPRIMIR</button>
            </form>
        </div>
        <script type='text/javascript' src='../Assets/js/descomprimir.js'></script>
    </div>
<?php include_once('../../Vista/Common/Footer.php')?>