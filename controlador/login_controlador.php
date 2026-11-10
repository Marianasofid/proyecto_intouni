<?php

session_start();

require_once("../config/conexion.php");

$con = conectar();

$email = $_POST['email'];
$password = $_POST['password'];

/* ADMINISTRADOR */

$sql = "SELECT * FROM Administrador
        WHERE email_admin='$email'
        AND password_admin='$password'";

$resultado = mysqli_query($con, $sql);

if(mysqli_num_rows($resultado) > 0)
{
    $_SESSION['rol'] = 'admin';

    header("Location: ../vista/panel_admin.php");
    exit();
}

/* ASPIRANTE */

$sql = "SELECT * FROM Aspirante
        WHERE email_aspirante='$email'
        AND password_aspirante='$password'";

$resultado = mysqli_query($con, $sql);

if(mysqli_num_rows($resultado) > 0)
{
    $_SESSION['rol'] = 'aspirante';

    header("Location: ../vista/panel_aspirante.php");
    exit();
}

/* UNIVERSIDAD */

$sql = "SELECT * FROM Universidad
        WHERE email_universidad='$email'
        AND password_universidad='$password'";

$resultado = mysqli_query($con, $sql);

if(mysqli_num_rows($resultado) > 0)
{
    $_SESSION['rol'] = 'universidad';

    header("Location: ../vista/panel_universidad.php");
    exit();
}

echo "Correo o contraseña incorrectos";

?>