<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "medicion";

$con = mysqli_connect($server, $user, $pass, $database);


if (!$con) {
    die("<script>alert('Conexion Fallida.')</script>");
}

?>