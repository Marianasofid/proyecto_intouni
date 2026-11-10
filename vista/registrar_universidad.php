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
    <title>Registrar Universidad</title>
</head>
<body>

<h1>Registrar Universidad</h1>
<hr>

<form action="../modelo/reg_universidad.php" method="POST">

    <label>Nombre de la universidad:</label><br>
    <input type="text" name="nombre_universidad" required>
    <br><br>

    <label>Ciudad:</label><br>
    <input type="text" name="ciudad_universidad" required>
    <br><br>

    <label>Departamento:</label><br>
    <input type="text" name="departamento_universidad" required>
    <br><br>

    <label>Tipo de universidad:</label><br>
    <select name="tipo_universidad" required>
        <option value="">Seleccione...</option>
        <option value="Pública">Pública</option>
        <option value="Privada">Privada</option>
    </select>
    <br><br>

    <label>Página web:</label><br>
    <input type="url" name="pagina_web" placeholder="https://www.universidad.edu.co">
    <br><br>

    <label>Correo electrónico:</label><br>
    <input type="email" name="email_universidad" required>
    <br><br>

    <label>Contraseña:</label><br>
    <input type="password" name="password_universidad" required>
    <br><br>

    <input type="submit" value="Registrar Universidad">

</form>

<br>

<a href="panel_admin.php">Volver al Panel</a>

</body>
</html>