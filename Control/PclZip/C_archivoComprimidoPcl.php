<?php
include_once('./../../Util/pclZip.lib.php');

class C_archivoComprimidoPcl{
    function generarCarpeta($estructura){
        if (is_dir($estructura)){
            rmDirR($estructura);
        }
        $generada=mkdir($estructura, 0700);
        return $generada;
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
    
    function moverArchivo($FILES, $folder){
        $archivos=$FILES["archivos"];
        $uploadFiles=[];
        $file_name=[];
        foreach ($archivos as $key => $value) {
            if($key=="tmp_name"){
                foreach($value as $k=>$v){
                    array_push($uploadFiles,$v);
                }
            }else if($key=="name"){
                foreach($value as $k=>$v){
                array_push($file_name,$v);
                }
            }
        }
        for($i=0;$i<count($uploadFiles);$i++){
            move_uploaded_file($uploadFiles[$i], "$folder" . $file_name[$i]);
        }
        return $file_name;
    }

    function generarComprimido($files,$folder){
        //print_r($files);
        $zip_name = $folder."nuevoZip.zip";
        $zip = new PclZip($zip_name);
        for($i=0;$i<count($files);$i++){
            if ($file!= "." && $file!= ".."){
                $zip->create($file[$i]);
            }
        }
        return $zip_name;
    }
    
}

?>

