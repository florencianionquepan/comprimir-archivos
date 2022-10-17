<?php
include_once('../../Util/funciones.php');

class C_archivoDescomprimido{
    function generarCarpeta(){
        $estructura='../../Descomprimidos';
        if (is_dir($estructura)){
            rmDirR($estructura);
        }
        $generada=mkdir($estructura, 0700);
        return $generada;
    }
    //verificar tambien que el archivo sea de tipo zip!!! y no se envie vacio!!

    function descomprimir($zipUser){
        $locacion=$zipUser["zip"]["tmp_name"];
        $archivo=$zipUser["zip"]["name"];
        $zip = new ZipArchive();
        $resultado=false;
        //quiero que el archivo a descomprimir sea de solo lectura
        if($zip->open($locacion, ZipArchive::RDONLY)===TRUE) {
            $zip->extractTo('../../Descomprimidos');
            $zip->close();
            $resultado=true;
        }else{
            echo "no era archivo zip";
        }
        return $resultado;
    }

    function obtenerArchivos($ruta, $lista){
        //Chequear que exista la carpeta Descomprimidos:
        if (is_dir($ruta)){
            //Abre un gestor de directorios para la ruta indicada
            $gestor = opendir($ruta);
            //Recorre todos los archivos del directorio
            while (($archivo = readdir($gestor)) !== false){
                $ruta_completa = $ruta . "/" . $archivo;
                //Se muestran todos los archivos y carpetas excepto "." y ".."
                if ($archivo != "." && $archivo != ".."){
                    //Si es un directorio se recorre recursivamente
                    if (is_dir($ruta_completa)){
                        $lista=$this->obtenerArchivos($ruta_completa,$lista);
                    }else{
                        $rutaArchivo=$ruta."/".$archivo;
                        array_push($lista,$rutaArchivo);
                        //print_r($lista);
                    }
                }
            }
            //Cierra el gestor de directorios
            closedir($gestor);
        }
        return $lista;
    }
}

?>