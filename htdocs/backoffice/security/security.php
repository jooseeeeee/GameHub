<?php
session_start();
//Verificamos que la sesión no esté seteada y que sea false, en caso contrario dejamos pasar.
if (!isset($_SESSION['sesion']) || !$_SESSION['sesion']) {
    header("location: welcome.php");
    session_destroy();
    exit();
}

