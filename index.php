<?php
    //requerimos los controladores y modelos en el index.php
    require_once "controlador/plantilla.controlador.php";
    require_once "controlador/formulario.controlador.php";
    require_once "modelo/formulario.modelo.php";

    //Instaciamos y llamamos a la plantilla login para poder mostrar al usuario
    $PlantillaInicio = new controladorplantilla();
    $PlantillaInicio -> ctrplantilla();