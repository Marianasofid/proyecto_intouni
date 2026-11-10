<?php

require_once("../config/conexion.php");

session_start();

if(!isset($_SESSION['rol']) || $_SESSION['rol'] != 'admin')
{
    header("Location: ../vista/login.php");
    exit();
}

$con = conectar();

$id = $_POST['id_aspirante'];
$nombre = $_POST['nombre_aspirante'];
$apellidos = $_POST['apellidos_aspirante'];
$email = $_POST['email_aspirante'];
$password = $_POST['password_aspirante'];
$telefono = $_POST['telefono_aspirante'];
$ciudad = $_POST['ciudad_aspirante'];
$colegio = $_POST['colegio_origen_aspirante'];

$sql = "UPDATE Aspirante SET

nombre_aspirante='$nombre',
apellidos_aspirante='$apellidos',
email_aspirante='$email',
password_aspirante='$password',
telefono_aspirante='$telefono',
ciudad_aspirante='$ciudad',
colegio_origen_aspirante='$colegio'

WHERE id_aspirante='$id'";

$resultado = mysqli_query($con,$sql);

if($resultado)
{
    echo "<script>

    alert('Aspirante actualizado correctamente');

    window.location='../vista/panel_admin.php';

    </script>";
}
else
{
    echo "Error: ".mysqli_error($con);
}

?>