<?php
    //llamamos a la plantilla login para poder mostrar al usuario
    require_once "controlador/plantilla.controlador.php";
    require_once "controlador/formulario.controlador.php";
    require_once "modelo/formulario.modelo.php";

    $PlantillaInicio = new controladorplantilla();
    $PlantillaInicio -> ctrplantilla();