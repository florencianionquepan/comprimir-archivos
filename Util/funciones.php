<?php

function data_submitted(){
    $_AAux = array();
    if (!empty($_POST))
        $_AAux = $_POST;
    else
            if (!empty($_GET)) {
        $_AAux = $_GET;
    }
    if (count($_AAux)) {
        foreach ($_AAux as $indice => $valor) {
            if ($valor == "")
                $_AAux[$indice] = 'null';
        }
    }
    return $_AAux;
}

 spl_autoload_register(function ($class_name){
    //echo "class ".$class_name ;
    //include_once $class_name.'.php';
     $directorys = array(
        //$_SESSION['ROOT'].'Modelo/',
        //$_SESSION['ROOT'].'Modelo/conector/',
        $_SESSION['ROOT'].'Control/PclZip/',
        $_SESSION['ROOT'].'Control/ZipArchive/',
        //$GLOBALS['ROOT'].'util/class/',
    );
    //print_object($directorys) ;
    foreach($directorys as $directory){
        if(file_exists($directory.$class_name . '.php')){
            // echo "se incluyo".$directory.$class_name . '.php';
            require_once($directory.$class_name . '.php');
            return;
        }
    }
});

function rmDirR($carpeta){
    foreach(glob($carpeta . "/*") as $archivos_carpeta){             
        if (is_dir($archivos_carpeta)){
            rmDirR($archivos_carpeta);
        } else {
        unlink($archivos_carpeta);
        }
      }
      rmdir($carpeta);
}


?>