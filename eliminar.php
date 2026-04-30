<?php
include("config.php");

$id = $_GET['id'];

$sql = "DELETE FROM envios WHERE id=?";
$stmt = $conexion->prepare($sql);
$stmt->execute([$id]);

header("Location: index.php");