<?php

include_once "vista/modulos/cabecera.php";
include_once "vista/modulos/menu.php";

if (isset($_GET["ruta"]) ) //comprueba si recibio alguna ruta
{

    if ($_GET["ruta"] == "inicio" || $_GET["ruta"] == "mascota" || $_GET["ruta"] == "propietario") {
        include_once "vista/modulos/".$_GET["ruta"].".php";
    }
    else {
        include_once "vista/modulos/404.php";
    }

}

else {

    include_once "vista/modulos/inicio.php";

}

include_once "vista/modulos/pie.php";
