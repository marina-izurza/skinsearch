<?php

//Si el usuario accede a esta dirección, llevarlo a esta otra

if (isset($_POST["submit"])) {

    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $usuario = $_POST["nick"];
    $pwd = $_POST["pwd"];
    $pwdrepite = $_POST["pwdrepite"];

    require_once '../model/db.php';
    require_once 'funciones.inc.php';


    //ERRORES

    //Comprobación si no se han rellenado todos los input
    if (inputVacioRegistro($nombre, $correo, $usuario, $pwd, $pwdrepite) !== false) {
        header("location: ../registro.php?error=inputvacio");
        exit();
    }

    //Comprobación si el nombre de usuario está mal
    if (usuarioMal($usuario) !== false) {
        header("location: ../registro.php?error=usuariomal");
        exit();
    }

    //Comprobación si el correo está mal
    if (correoMal($correo) !== false) {
        header("location: ../registro.php?error=correomal");
        exit();
    }

    //Comprobación si las contraseñas coinciden
    if (compararPwd($pwd, $pwdrepite) !== false) {
        header("location: ../registro.php?error=pwdmal");
        exit();
    }

    //Comprobación si el nombre de usuario está repetido
    if (usuarioRepetido($conexion, $usuario, $correo) !== false) {
        header("location: ../registro.php?error=usuariorepetido");
        exit();
    }

    crearUsuario($conexion, $nombre, $correo, $usuario, $pwd);
} else {
    header("location: ../registro.php");
    exit();
}
