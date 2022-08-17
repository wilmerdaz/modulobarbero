<link rel="stylesheet" href="view/css/usuariosStyle.css">


<?php

//controller
require_once "controller/plantilla.controller.php";
require_once "controller/conexion.controller.php";
require_once "controller/registro.controller.php";


//modelos

require_once "model/conexion.php";
require_once "model/dao/conexion.dao.php";
require_once "model/dao/registro.dao.php";
require_once "model/dto/registro.dto.php";



//creacion objeto de arranque
$objPlantillla = new PlantillaController();
$objPlantillla ->ctrPlantilla();


?>  