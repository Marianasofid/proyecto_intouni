<?php

require_once("../config/conexion.php");

$con = conectar();

$sql = "SELECT * FROM Universidad";

$resultado = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consulta Universidades</title>
</head>
<body>

<h1>Lista de Universidades</h1>

<table border="1">

<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Ciudad</th>
    <th>Departamento</th>
    <th>Tipo</th>
    <th>Página Web</th>
    <th>Correo</th>
</tr>

<?php

while($fila = mysqli_fetch_assoc($resultado))
{
?>

<tr>
    <td><?php echo $fila['id_universidad']; ?></td>
    <td><?php echo $fila['nombre_universidad']; ?></td>
    <td><?php echo $fila['ciudad_universidad']; ?></td>
    <td><?php echo $fila['departamento_universidad']; ?></td>
    <td><?php echo $fila['tipo_universidad']; ?></td>
    <td><?php echo $fila['pagina_web']; ?></td>
    <td><?php echo $fila['email_universidad']; ?></td>
</tr>

<?php
}
?>

</table>

<br>

<a href="../vista/panel_admin.php">Volver</a>

</body>
</html>