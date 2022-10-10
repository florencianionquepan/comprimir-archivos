<?php
include_once('../Vista/Common/Header.php');
include_once("./../Control/C_archivoComprimido.php");

$objetoZip=new C_archivoComprimido;
//$file=$objetoZip->moverArchivo($_FILES);
$resultados=$objetoZip->generarComprimido($file);

?>
 <div class="container-md">
    <div class="row m-5 text-center justify-content-center align-items-center">
        <?php if($resultados[0]){?>
            <div class="col-12 col-md-8 col-lg-6 col-xl-4 alert alert-secondary" role="alert">
            Ahora puedes descargar  <a class="alert-link" href='<?php echo $resultados[1]?>'>tu fichero ZIP ♥</a>
            </div>
        <?php
        }else{ ?>
            <div class="col-12 col-md-8 col-lg-6 col-xl-4 alert alert-danger" role="alert">
            No fue posible generar el ZIP <br> <a class="alert-link" href='./index.php'> VOLVER                     </a>
            </div>
            <?php
        } 
        ?>
    </div>
</div>
<?php include_once('../Vista/Common/Footer.php')?>