<?php
include_once('../../Vista/Common/Header.php');
$objetoZip=new C_archivoComprimidoPcl;
$folder='./../../Uploads/';
$objetoZip->moverArchivo($_FILES,$folder);


?>