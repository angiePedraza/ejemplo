<?php

class FolderModelo{

    public static function crearFolder($nombreFolder){
    $mensaje = array();
    $directorioGeneral = "Imagenes";
    $error = false;
    $ruta = "";

    //se crea o comprueba la carpeta del directorio general donde se guardaran las carpetas con img
    if (!file_exists('../'.$directorioGeneral)) {
        
        if (!mkdir('../'.$directorioGeneral,0777,true)){
            
            $error = true;
        }
        else {
            $ruta = $directorioGeneral;
        }

    } else {

        $ruta = $directorioGeneral;

    }


    //se crea o comprueba la carpeta donde se subira la img dentro del directorio
    if (!$error) {
        if (!file_exists('../'.$directorioGeneral."/".$nombreFolder))  {
            if (!mkdir('../'.$directorioGeneral."/".$nombreFolder,0777,true)){
            
                $error = true;
            }
            else {
                $ruta = $directorioGeneral."/".$nombreFolder;
            }
        }else {
            $ruta = $directorioGeneral."/".$nombreFolder;
            echo "el directorio ya existe";
        }
    }

    if (!$error) {
        $mensaje = array("codigo"=>"200","rutaFolder"=>$ruta);
        // echo "el directorio de la img se ha creado correctamente";

    }else {
        $mensaje = array("codigo"=>"401","mensaje"=>"Error al crear directorios");

    }
    


    return $mensaje;
    } 
}