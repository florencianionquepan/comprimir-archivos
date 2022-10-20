<?php
include_once('./../../Util/funciones.php');

class C_archivoComprimido{
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
        
        $zip = new ZipArchive();
        $zip_name = $folder."nuevoZip.zip";
        if ($zip->open($zip_name, ZipArchive::CREATE) === true) {
            foreach($files as $file){
                if ($file!= "." && $file!= ".."){
                    $zip->addFile($zip_name . $file);
                }
            }
            $zip->close();
            $resultado = true;
          } else {
            $resultado = false;
          }
          $resultados=[$resultado,$zip_name];
          return $resultados;
    }
    
    function limpiarDirectorio($file){
        for($i=2;$i<count($file);$i++){    
        If (unlink("../../Uploads/" . $file[$i])) {
            // file was successfully deleted
          } else {
            // there was a problem deleting the file
          }
        }   
    }

    function eliminarArchivo($nombre){
            If (unlink("../Uploads/" . $nombre)) {
            // file was successfully deleted
          } else {
            // there was a problem deleting the file
          }
     
    }


    
}

?>

