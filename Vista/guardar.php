<?php
include_once("./../Control/C_archivoComprimido.php");

$objetoZip=new C_archivoComprimido;
print_r($_FILES);

$file=$objetoZip->moverArchivo($_FILES);

?>