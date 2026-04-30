<?php
include("config.php");

if ($_POST) {
    $codigo = $_POST['codigo'];
    $descripcion = $_POST['descripcion'];
    $destino = $_POST['destino'];

    $sql = "INSERT INTO envios (codigo, descripcion, destino) VALUES (?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->execute([$codigo, $descripcion, $destino]);

    header("Location: index.php");
}
?>

<h2>Crear Envío</h2>
<form method="POST">
    Código: <input type="text" name="codigo"><br>
    Descripción: <input type="text" name="descripcion"><br>
    Destino: <input type="text" name="destino"><br>
    <button type="submit">Guardar</button>
</form>