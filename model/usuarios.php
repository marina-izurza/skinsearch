<?php

require_once("db.php");

class modeloUsuario {

    private $conx;

    public function __construct() {
        $this->conx = new dbConexion();
    }

    public function crearUsuario($nombre, $correo, $usuario, $pwd) {
        return $this->conx->doQuery("INSERT INTO usuarios (nombreUsuarios, correoUsuarios, nickUsuarios, pwdUsuarios) VALUES ('" . $nombre . "','" . $correo . "'," . $usuario . " $pwd);");
    }

    function inicioSesion($conexion, $usuario, $pwd) {

        $usuarioActual = usuarioRepetido($conexion, $usuario, $usuario); //resultados
    
        if ($usuarioActual === false) { 
            header("location: ../inciar.php?error=iniciomal");//error si meto randoms
            exit();
        }
    
        $encriptarPwd = $usuarioActual["pwdUsuarios"];
        $compruebaPwd = password_verify($pwd, $encriptarPwd);
    
        if ($compruebaPwd === false) {
            header("location: ../inciar.php?error=iniciomal"); //error si meto validos
            exit();
    
        } else if ($compruebaPwd === true) {
            session_start();
    
            $_SESSION["id"] = $usuarioActual["idUsuario"];
            $_SESSION["nombre"] = $usuarioActual["nombreUsuarios"];
            $_SESSION["nick"] = $usuarioActual["nickUsuarios"];
    
            header("location: ../perfil.php");
            exit();
        }
    }

}