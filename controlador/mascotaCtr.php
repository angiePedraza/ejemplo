<?php
include_once "../modelo/mascotaMod.php";


class mascotaControlador {

    public $idMascota;
    public $nombre;
    public $raza;
    public $edad;
    public $documentoPro;
    public $imagen;

public function ctrRegistrarMascota(){

	$objRespuesta = mascotaModelo::mdlRegistrarMascota($this->nombre,$this->raza,$this->edad,$this->documentoPro,$this->imagen);
	echo json_encode($objRespuesta);
	}

public function ctrEditarMascota(){
	}

public function ctrEliminarMascota(){
	}




public function ctrListarMascota(){
	$objMascotaMdl = mascotaModelo::mdlListarMascota();
	echo json_encode($objMascotaMdl);
	}





public function ctrCargarMascota(){
	}

}

if (isset($_POST["registrarMascota"]) == "ok") {
	
	$objRegistroMascota = new mascotaControlador();
	$objRegistroMascota->nombre = $_POST["nombre"];
	$objRegistroMascota->raza = $_POST["raza"];
	$objRegistroMascota->edad = $_POST["edad"];
	$objRegistroMascota->documentoPro = $_POST["documentoPro"];
	$objRegistroMascota->imagen = $_FILES["imagen"];
	$objRegistroMascota->ctrRegistrarMascota();

}

if (isset($_POST["listarMascotas"]) == "ok") {

	$objMascota = new mascotaControlador();
	$objMascota->ctrListarMascota();
}

