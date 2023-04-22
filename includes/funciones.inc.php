<?php

function inputVacioRegistro($nombre, $correo, $usuario, $pwd, $pwdrepite)
{

    //$validez;
    //Si alguno de estos campos está vacio
    if (empty($nombre) || empty($correo) || empty($usuario) || empty($pwd) || empty($pwdrepite)) {
        $validez = true;
    } else { //si están todos rellenos..
        $validez = false;
    }
    return $validez;
}

function usuarioMal($usuario)
{

    //$validez;
    $regExp = "/^[a-zA-Z0-9]*$/";

    if (!preg_match($regExp, $usuario)) {
        $validez = true;
    } else { //si cumple con la expresión...
        $validez = false;
    }
    return $validez;
}

function correoMal($correo)
{

    //Si el primer parámetro (correo) cumple con lo correcto, de vuelve true, pero nosotros queremos false 
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $validez = true;
    } else {
        $validez = false;
    }
    return $validez;
}

function compararPwd($pwd, $pwdrepite)
{

    //Si la contraseña no son iguales, hay error y me da un true
    if ($pwd !== $pwdrepite) {
        $validez = true;
    } else {
        $validez = false;
    }
    return $validez;
}

//Usamos esta función para detectar nombre de usuario duplicado y para
//seguir adelante si no existe
//La usamos para iniciar sesion y registrarnos
function usuarioRepetido($conexion, $usuario, $correo)
{

    $consulta = "SELECT * FROM usuarios WHERE nickUsuarios = ? OR correoUsuarios = ?;";
    $statement = mysqli_stmt_init($conexion); //prepara ypreviene la inyeccion por ususario en inputs

    //Ejecuta esta consulta dentro del comprobante (statement) y a ver si hay errores
    //Si hay un error, le mandamos a esa localización
    if (!mysqli_stmt_prepare($statement, $consulta)) {
        header("location: ../registro.php?error=statementmal");
        exit();
    }

    //Mandamos 2Strings y los datos
    mysqli_stmt_bind_param($statement, "ss", $usuario, $correo);

    mysqli_stmt_execute($statement);

    $resultados = mysqli_stmt_get_result($statement);

    if ($row = mysqli_fetch_assoc($resultados)) { //true si hay datos en la funcion y asigna datos a row
        return $row; //devuelvo todos los datos  de la bd si este usuario existe
    } else {
        $resultado = false;
        return $resultado;
    }

    mysqli_stmt_close($statement);
}

function crearUsuario($conexion, $nombre, $correo, $usuario, $pwd)
{
    $consulta = "INSERT INTO usuarios (nombreUsuarios, correoUsuarios, nickUsuarios, pwdUsuarios) VALUES (?, ?, ?, ?);";
    $statement = mysqli_stmt_init($conexion);


    if (!mysqli_stmt_prepare($statement, $consulta)) {
        header("location: ../registro.php?error=statementmal");
        exit();
    }

    $encriptarPwd = password_hash($pwd, PASSWORD_DEFAULT);


    mysqli_stmt_bind_param($statement, "ssss", $nombre, $correo, $usuario, $encriptarPwd);

    mysqli_stmt_execute($statement);

    mysqli_stmt_close($statement);


    header("location: ../registro.php?error=exito");
    exit();
}

//-------------------Funciones de inicio de sesión

function inputVacioIniciar($usuario, $pwd)
{

    //Si alguno de estos campos está vacio
    if (empty($usuario) || empty($pwd)) {
        $validez = true;
    } else { //si están todos rellenos..
        $validez = false;
    }
    return $validez;
}

function inicioSesion($conexion, $usuario, $pwd)
{

    $usuarioActual = usuarioRepetido($conexion, $usuario, $usuario); //resultados

    if ($usuarioActual === false) {
        header("location: ../inciar.php?error=iniciomal"); //error si meto randoms
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

//-------------------Funciones de perfil

function eligeQuimicos($conexion, $numPiel)
{

    $consulta = "SELECT quimicos.nombre, infoquimicos.info FROM quimicos INNER JOIN infoquimicos 
        ON quimicos.quimicosID=infoquimicos.quimicoID WHERE quimicos.pielID=$numPiel;";

    $resultado = mysqli_query($conexion, $consulta);

    while ($row = mysqli_fetch_assoc($resultado)) {

        $nombre = $row["nombre"];
        $info = $row["info"];

        echo "<div class='d-flex gap-5 justify-content-center'>";
        echo "<div class='card mb-3 d-flex' style='max-width: 1000px;'>";
        echo "<div class='row g-0'>";
        echo "<div class='col-md-4'>";
        echo "<img src='img/" . $nombre . ".png' class='img-fluid rounded-start py-5' alt='sustancia'>";
        echo "</div>";
        echo "<div class='col-md-8'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title fst-italic fw-bold'>" . $nombre . "</h5>";
        echo "<p class='card-text'>" . $info . "</p>";
        echo "</div></div></div></div></div>";
    }
}
