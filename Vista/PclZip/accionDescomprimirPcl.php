<?php
include_once('../../Vista/Common/Header.php');
include_once("../../Control/PclZip/C_archivoDescomprimirPcl.php");

$objetoDescomprimir=new C_archivoDescomprimidoPcl;
print_r($_FILES);
$resultados=$objetoDescomprimir->descomprimir($_FILES);
echo $resultados[1];
    if ($resultados[0]){
        $rutasArchivos=$objetoDescomprimir->obtenerArchivos($ruta='./../../Descomprimidos', $lista=[]);
        //print_r($rutasArchivos);
        echo "<div class='row my-5 text-center justify-content-center align-items-center'>";
        echo "<div class='col-12 col-md-8 col-lg-6 alert alert-secondary' role='alert'>";
        foreach($rutasArchivos as $archivo){
            echo "<a class='alert-link' download href=../../'.$archivo>".$archivo."</a><br>";
        }
        echo "</div>";
        echo "</div>";
        ?>
<?php
    }else{
        echo $resultados[1];
    }

include_once('../../Vista/Common/Footer.php')?>;
