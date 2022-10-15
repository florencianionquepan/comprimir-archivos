<?php

class C_archivoComprimido{
    
    function moverArchivo($FILES){

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
            }else if($key == "size"){
                foreach($value as $k=>$v){
                    if($v >= 2099000){
                        //mensaje = No se han podido subir los archivos;
                    }
                    }
            }
        }

        $folder = "./../Comprimidos2/";
        for($i=0;$i<count($uploadFiles);$i++){
            move_uploaded_file($uploadFiles[$i], "$folder" . $file_name[$i]);
        }
        return $file_name;
    }

    function generarComprimido($file){
        $zip = new ZipArchive();
        $zip_name = "Comprimidos.zip";
        if ($zip->open($zip_name, ZipArchive::CREATE) === true) {
            for($i=2;$i<count($file);$i++){
                $zip->addFile("./../Comprimidos2/" . $file[$i]);
            }
            //$zip->close();
            // Declaramos una variable para mostrar mensaje 
            $resultado = true;
          } else {
            $resultado = false;
          }
          $resultados=[$resultado,$zip_name];
          return $resultados;
    }
    
    function limpiarDirectorio($file){
        for($i=2;$i<count($file);$i++){    
        If (unlink("./../Comprimidos2/" . $file[$i])) {
            // file was successfully deleted
          } else {
            // there was a problem deleting the file
          }
        }   
    }

    
}

?>

