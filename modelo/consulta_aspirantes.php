<?php

require_once("../config/conexion.php");

$con = conectar();

$sql = "SELECT * FROM Aspirante";

$resultado = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consulta Aspirantes</title>
</head>
<body>

<h1>Lista de Aspirantes</h1>

<table border="1">

<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Correo</th>
    <th>Teléfono</th>
    <th>Ciudad</th>
    <th>Colegio</th>
</tr>

<?php

while($fila = mysqli_fetch_assoc($resultado))
{
?>

<tr>
    <td><?php echo $fila['id_aspirante']; ?></td>
    <td><?php echo $fila['nombre_aspirante']; ?></td>
    <td><?php echo $fila['apellidos_aspirante']; ?></td>
    <td><?php echo $fila['email_aspirante']; ?></td>
    <td><?php echo $fila['telefono_aspirante']; ?></td>
    <td><?php echo $fila['ciudad_aspirante']; ?></td>
    <td><?php echo $fila['colegio_origen_aspirante']; ?></td>
</tr>

<?php
}
?>

</table>

<br>

<a href="../vista/panel_admin.php">Volver</a>

</body>
</html>