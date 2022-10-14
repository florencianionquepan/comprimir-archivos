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
        if($zip->open($locacion)===TRUE) {
            $zip->extractTo('./../Descomprimidos');
            $zip->close();
            $resultado=true;
        }else{
            echo "not";
        }
        return $resultado;
    }

    function descargarArchivos(){
        $estructura='./../Descomprimidos';

        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
    }

    function eliminar(){
        $estructura='./../Descomprimidos';
        $eliminada=rmdir($estructura, 0700);
        return $eliminada;
    }

    function obtenerArchivos(){
        $listaArchivos=[];
        $i=0;
        //Chequear que exista la carpeta Descomprimidos:
        $ruta='./../Descomprimidos';
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
                        echo "<li>" . $archivo . "</li>";
                        $carpeta[$i]=obtenerArchivos($ruta_completa);
                        $i++;
                        array_push($listaArchivos,$carpeta[$i]);
                    }else{
                        echo "<li>" . $archivo . "</li>";
                        array_push($listaArchivos,$archivo);
                    }
                }
            }
            //Cierra el gestor de directorios
            closedir($gestor);
            echo "</ul>";
        }else{
            echo "No es una ruta de directorio valida<br/>";
        }
        return $listaArchivos;
    }
    
    function descargar($fichero){
        $basefichero = basename($fichero);
        if(!empty($basefichero)){
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header( 'Content-Type: application/octet-stream');
            header( 'Content-Length:'.filesize($fichero));
            header( 'Content-Disposition:attachment;filename='.$basefichero);
            readfile($fichero);
            exit;
        }    
    }
}

?>