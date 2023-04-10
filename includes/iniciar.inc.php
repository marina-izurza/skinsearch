<?php

if (isset($_POST["submit"])) {

    $usuario = $_POST["nick"];
    $pwd = $_POST["pwd"];

    require_once '../model/db.php';
    require_once 'funciones.inc.php';


    //ERRORES

    //Comprobación si no se han rellenado todos los input
    if (inputVacioIniciar($usuario, $pwd) !== false) {
        header("location: ../iniciar.php?error=inputvacio");
        exit();
    }

    inicioSesion($conexion, $usuario, $pwd);
    
} else {
    header("location: ../iniciar.php");
    exit();
}