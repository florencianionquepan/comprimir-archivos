<?php
include_once('../../Vista/Common/Header.php');

$objetoDescomprimir=new C_archivoDescomprimidoPcl;
$resultados=$objetoDescomprimir->descomprimir($_FILES);
    if ($resultados[0]){
        $rutasArchivos=$objetoDescomprimir->obtenerArchivos($ruta='./../../Descomprimidos/zip', $lista=[]);
        //print_r($rutasArchivos);
        echo "<div class='row my-5 text-center justify-content-center align-items-center'>";
        echo "<div class='col-12 col-md-8 col-lg-6 alert alert-secondary' role='alert'>";
        foreach($rutasArchivos as $archivo){
            $nombreArchivo=explode('/',$archivo);
            echo "<a class='descargas alert-link' download href= '$archivo'>".end($nombreArchivo)."</a><br>";
        }
        echo "</div>";
        echo "</div>";
        ?>
        <div class="mb-3 text-center">
            <a href= "descomprimirPcl.php" class="btn btn-outline-secondary">Volver</a>
        </div>
<?php
    }else{
        echo "<div class='row my-5 text-center justify-content-center align-items-center'>";
        echo "<div class='col-12 col-md-8 col-lg-6 alert alert-danger' role='alert'>";
        echo $resultados[1];
        echo "</div>";
        echo "</div>";
        ?>
        <div class="mb-3 text-center">
            <a href= "descomprimirPcl.php" class="btn btn-outline-secondary">Volver</a>
        </div>
        <?php

    }

include_once('../../Vista/Common/Footer.php')?>;
