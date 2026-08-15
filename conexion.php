<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "robot";

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    echo("No se a podido realizar la conexión");
}
?>