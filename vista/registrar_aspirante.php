<?php

session_start();

if(!isset($_SESSION['rol']) || $_SESSION['rol'] != 'admin')
{
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Aspirante</title>
</head>
<body>

<h1>Registrar Aspirante</h1>

<form action="../modelo/reg_aspirante.php" method="POST">

    <label>Nombre:</label><br>
    <input type="text" name="nombre_aspirante" required>
    <br><br>

    <label>Apellidos:</label><br>
    <input type="text" name="apellidos_aspirante" required>
    <br><br>

    <label>Correo:</label><br>
    <input type="email" name="email_aspirante" required>
    <br><br>

    <label>Contraseña:</label><br>
    <input type="password" name="password_aspirante" required>
    <br><br>

    <label>Teléfono:</label><br>
    <input type="text" name="telefono_aspirante" required>
    <br><br>

    <label>Ciudad:</label><br>
    <input type="text" name="ciudad_aspirante" required>
    <br><br>

    <label>Colegio de origen:</label><br>
    <input type="text" name="colegio_origen_aspirante" required>
    <br><br>

    <input type="submit" value="Registrar Aspirante">

</form>

<br>

<a href="panel_admin.php">Volver al Panel</a>

</body>
</html>