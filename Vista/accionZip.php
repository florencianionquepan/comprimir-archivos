<?php
include_once("./../Control/C_archivoComprimido.php");

$objetoZip=new C_archivoComprimido;
$file=$objetoZip->moverArchivo($_FILES);
$objetoZip->generarComprimido($file);


?>