<?php

session_start();

if(!isset($_SESSION['rol']))
{
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Panel Administrador</title>
</head>
<body>

<h1>Bienvenido Administrador</h1>

<h2>Registros</h2>
    <a href="registrar_aspirante.php">Registrar Aspirante</a>
    <br>
    <a href="registrar_universidad.php">Registrar Universidad</a>
    <hr>
<h2>Consultas</h2>
    <a href="../modelo/consulta_aspirantes.php">Consultar Aspirantes</a>
    <br>
    <a href="../modelo/consulta_universidades.php">Consultar Universidades</a>
<h2>Actualizar datos</h2>
    <a href="actualizar_aspirante.php">Actualizar datos del aspirante</a>
    <br>
    <a href="actualizar_universidad.php">Actualizar datos de la universidad</a>
    <hr>
<h2>Eliminar aspirante</h2>
    <a href="eliminar_aspirante.php">Eliminar un aspirante</a>
    <br>
    <a href="eliminar_universidad.php">Eliminar una universidad</a>
    <hr>
<h2>Salir</h2>
    <a href=".../modelo/cerrar_sesion.php">Cerrar sesión</a>

</body>
</html>