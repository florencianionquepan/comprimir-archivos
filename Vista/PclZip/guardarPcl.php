<?php
include_once("./../../Control/PclZip/C_archivoComprimidoPcl.php");

$objetoZip=new C_archivoComprimidoPcl;
$folder='./../../Uploads/';
$objetoZip->moverArchivo($_FILES,$folder);


?>