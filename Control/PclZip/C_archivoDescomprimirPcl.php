<?php
include_once('./../../Util/funciones.php');
include_once('./../../Util/pclzip.lib.php');

class C_archivoDescomprimidoPcl{
    function generarCarpeta(){
        $estructura='./../../Descomprimidos';
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
        
        move_uploaded_file($locacion, "./../../Descomprimidos/" . $archivo);
        
    
        $zip = new PclZip("./../../Descomprimidos/".$archivo);
        $resultado=false;
        $error='';
        if($zip->extract('./../../Descomprimidos/zip/')) {
            $resultado=true;
        }else{
            $error=$zip->errorInfo();
        }
        
        //le quita todos los espacios que tenga un nombre de un archivo
        $dir = "./../../Descomprimidos/zip/";
        $gestor = opendir($dir);

        while (($archivo = readdir($gestor)) !== false)  {
            $sin = str_replace(' ', '', $archivo);
            if ($archivo != "." && $archivo != ".."){
                rename($dir.$archivo, $dir.$sin);
            }}
        
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