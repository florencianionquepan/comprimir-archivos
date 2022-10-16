<?php
include_once("../Control/ZipArchive/C_archivoComprimido.php");

$objetoZip=new C_archivoComprimido;
echo $objetoZip->EliminarArchivo( $_POST["texto"]);


?>