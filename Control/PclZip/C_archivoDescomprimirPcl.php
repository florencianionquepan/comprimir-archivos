<?php
include_once('./../../Util/funciones.php');
include_once('./../../Util/pclzip.lib.php');

class C_archivoDescomprimidoPcl{
    function generarCarpeta(){
        $estructura='./../../Descomprimidos';
        if (is_dir($estructura)){
            rmDirR($estructura);
        }
/*         $generada=mkdir($estructura, 0700);
        return $generada; */
    }
    //verificar tambien que el archivo sea de tipo zip!!! y no se envie vacio!!

    function descomprimir($zipUser){
        $locacion=$zipUser["zip"]["tmp_name"];
        $archivo=$zipUser["zip"]["name"];
        $zip = new PclZip($archivo);
        $resultado=false;
        if($zip->extract('./../../Descomprimidos')) {
            $resultado=true;
        }else{
            $error=$zip->errorInfo();
        }
        $resultados=[$resultado,$error];
        return $resultados;
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