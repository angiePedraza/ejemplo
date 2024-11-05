<?php

include_once 'conexion.php';
include_once 'crearFolderMod.php';


class mascotaModelo {
	 public static function mdlRegistrarMascota($nombre, $raza, $edad, $documentoPro, $imagen){

		$mensaje = array();

		try {
            $objRutaFolder = FolderModelo::crearFolder($documentoPro);
            if ($objRutaFolder["codigo"]=="200") {
            
               $extension = explode('.', $imagen["name"]);
               $nombreArchivo = uniqid('IMG-').'.'.end($extension);

               if (move_uploaded_file($imagen['tmp_name'],'../'.$objRutaFolder["rutaFolder"].'/'.$nombreArchivo)){

                $rutaRelativa = $objRutaFolder["rutaFolder"].'/'.$nombreArchivo;
                $objRespuesta = Conexion::conectar()->prepare
                ("INSERT INTO mascota(nombre, raza, edad, documentoProp, imagen)
                	           VALUES(:nombre, :raza, :edad, :documentoPro, :imagen)");
                $objRespuesta->bindParam(":nombre",$nombre);
                $objRespuesta->bindParam(":raza",$raza);
                $objRespuesta->bindParam(":edad",$edad);
                $objRespuesta->bindParam(":documentoPro",$documentoPro);
                $objRespuesta->bindParam(":imagen",$rutaRelativa);
                if ($objRespuesta->execute()) {
                    
                    $mensaje = array("rta"=> "200","mensaje"=>"Mascota registrada correctamente");
                } else {
                    $mensaje = array("rta"=> "401","mensaje"=>"Mascota no registrada correctamente");
                }
                

               } else {
                $mensaje = array("rta"=> "401","mensaje"=>"error no fue posible subir el archivo al servidor");
               }

            } else {
                $mensaje = array("rta"=> "401","mensaje"=>$objRutaFolder["mensaje"]);
            
            }
            
        } catch (Exception $e) {
            $mensaje = array("rta"=> "401","mensaje"=>$e->getMessage());

        }

        return $mensaje;


	 }


    public static function mdlListarMascota(){

        $mensaje = array();

        try {
            
            $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM mascota");
            $objRespuesta->execute();
            $listarUsuarios = $objRespuesta->fetchAll();
            $mensaje = array("codigo" => "200","listarMascotas"=>$listarUsuarios);
            $objRespuesta = null;
        } catch (Exception $e) {
            $mensaje = array("codigo" => "401","mensaje"=>$e->getMessage());
        }
        return $mensaje;
    }
    
}