<?php
include_once("./../../Control/ZipArchive/C_archivoComprimido.php");

$objetoZip=new C_archivoComprimido;
$folder='./../../Uploads/';
$objetoZip->moverArchivo($_FILES,$folder);


?>