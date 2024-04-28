<?php
//Archivo de conexión a la base de datos
$servername = "localhost";
$database = "gamehub";
$usernameDB = "root";
$passwordDB = "";

$conn = mysqli_connect($servername, $usernameDB, $passwordDB, $database);

if (!$conn) {
    die("No se pudo conectar. Error: " . mysqli_connect_error());
}

