<?php
class C_archivoDescomprimido{
    function generarCarpeta(){
        $estructura='./../Descomprimidos';
        $generada=mkdir($estructura, 0700);
        return $generada;
    }
    //verificar tambien que el archivo sea de tipo zip!!!

    function descomprimir($zipUser){
        $locacion=$zipUser["zip"]["tmp_name"];
        $archivo=$zipUser["zip"]["name"];
        $zip = new ZipArchive();
        $resultado=false;
        //quiero que el archivo a descomprimir sea de solo lectura
        if($zip->open($locacion, ZipArchive::RDONLY)===TRUE) {
            $zip->extractTo('./../Descomprimidos');
            $zip->close();
            $resultado=true;
        }else{
            echo "no era archivo zip";
        }
        return $resultado;
    }

    function eliminar(){
        $estructura='./../Descomprimidos';
        $eliminada=rmdir($estructura, 0700);
        return $eliminada;
    }
}

?>