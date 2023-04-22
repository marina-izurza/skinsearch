<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "bbdd-piel";

$conexion = mysqli_connect($host, $user, $password, $dbname);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
