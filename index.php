<?php include("config.php"); ?>

<h2>Lista de Envíos</h2>
<a href="crear.php">Crear nuevo envío</a>

<table border="1">
<tr>
    <th>ID</th>
    <th>Código</th>
    <th>Descripción</th>
    <th>Destino</th>
    <th>Acciones</th>
</tr>

<?php
$sql = $conexion->query("SELECT * FROM envios");
foreach ($sql as $row) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['codigo']}</td>
        <td>{$row['descripcion']}</td>
        <td>{$row['destino']}</td>
        <td>
            <a href='editar.php?id={$row['id']}'>Editar</a>
            <a href='eliminar.php?id={$row['id']}'>Eliminar</a>
        </td>
    </tr>";
}
?>
</table>