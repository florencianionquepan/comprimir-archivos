<?php
include_once("./../Control/C_archivoDescomprimir.php");
$objetoDescomprimir=new C_archivoDescomprimido;
$carpetaGenerada=$objetoDescomprimir->generarCarpeta();
if($carpetaGenerada){
    $objetoDescomprimir->descomprimir($_FILES);
    //aca deberia escargar automaticamente!!
    //$objetoDescomprimir->eliminar();
}

?>