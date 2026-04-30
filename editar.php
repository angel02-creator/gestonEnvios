<?php
include("config.php");

$id = $_GET['id'];

if ($_POST) {
    $codigo = $_POST['codigo'];
    $descripcion = $_POST['descripcion'];
    $destino = $_POST['destino'];

    $sql = "UPDATE envios SET codigo=?, descripcion=?, destino=? WHERE id=?";
    $stmt = $conexion->prepare($sql);
    $stmt->execute([$codigo, $descripcion, $destino, $id]);

    header("Location: index.php");
}

$sql = $conexion->query("SELECT * FROM envios WHERE id=$id");
$data = $sql->fetch();
?>

<h2>Editar Envío</h2>
<form method="POST">
    Código: <input type="text" name="codigo" value="<?= $data['codigo'] ?>"><br>
    Descripción: <input type="text" name="descripcion" value="<?= $data['descripcion'] ?>"><br>
    Destino: <input type="text" name="destino" value="<?= $data['destino'] ?>"><br>
    <button type="submit">Actualizar</button>
</form>