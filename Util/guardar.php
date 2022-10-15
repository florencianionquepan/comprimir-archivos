<?php
include_once("../Control/ZipArchive/C_archivoComprimido.php");

$objetoZip=new C_archivoComprimido;
$file=$objetoZip->moverArchivo($_FILES);

?>