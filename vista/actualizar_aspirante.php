<?php

require_once("../config/conexion.php");

session_start();

if(!isset($_SESSION['rol']) || $_SESSION['rol'] != 'admin')
{
    header("Location: login.php");
    exit();
}

$con = conectar();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Aspirante</title>
</head>
<body>

<h1>Actualizar Aspirante</h1>
<hr>

<form method="POST">

    <label>ID del aspirante:</label><br>
    <input type="number" name="id_aspirante" required>

    <br><br>

    <input type="submit" name="buscar" value="Buscar">

</form>

<hr>

<?php

if(isset($_POST['buscar']))
{
    $id = $_POST['id_aspirante'];

    $sql = "SELECT * FROM Aspirante
            WHERE id_aspirante='$id'";

    $resultado = mysqli_query($con,$sql);

    if(mysqli_num_rows($resultado)>0)
    {
        $fila=mysqli_fetch_assoc($resultado);
?>

<form action="../modelo/actualizar_aspirante.php" method="POST">

<input type="hidden"
name="id_aspirante"
value="<?php echo $fila['id_aspirante']; ?>">

<label>Nombre:</label><br>
<input type="text"
name="nombre_aspirante"
value="<?php echo $fila['nombre_aspirante']; ?>"
required>

<br><br>

<label>Apellidos:</label><br>
<input type="text"
name="apellidos_aspirante"
value="<?php echo $fila['apellidos_aspirante']; ?>"
required>

<br><br>

<label>Correo:</label><br>
<input type="email"
name="email_aspirante"
value="<?php echo $fila['email_aspirante']; ?>"
required>

<br><br>

<label>Contraseña:</label><br>
<input type="text"
name="password_aspirante"
value="<?php echo $fila['password_aspirante']; ?>"
required>

<br><br>

<label>Teléfono:</label><br>
<input type="text"
name="telefono_aspirante"
value="<?php echo $fila['telefono_aspirante']; ?>"
required>

<br><br>

<label>Ciudad:</label><br>
<input type="text"
name="ciudad_aspirante"
value="<?php echo $fila['ciudad_aspirante']; ?>"
required>

<br><br>

<label>Colegio:</label><br>
<input type="text"
name="colegio_origen_aspirante"
value="<?php echo $fila['colegio_origen_aspirante']; ?>"
required>

<br><br>

<input type="submit" value="Actualizar Aspirante">

</form>

<?php

    }
    else
    {
        echo "<h3>No existe un aspirante con ese ID.</h3>";
    }

}

?>

<br>

<a href="panel_admin.php">Volver al panel</a>

</body>
</html>