<?php
$host = "mysql-soto.alwaysdata.net";
$db = "soto_gestionenvios";
$user = "soto";
$pass = "clase1234";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>