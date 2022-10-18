<?php
include_once("./../../Control/ZipArchive/C_archivoComprimidoPcl.php");

$objetoZip=new C_archivoComprimidoPcl;
$folder='./../../Uploads/';
$objetoZip->moverArchivo($_FILES,$folder);


?>