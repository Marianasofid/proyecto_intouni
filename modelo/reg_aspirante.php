<?php

require_once("../config/conexion.php");

session_start();

if(!isset($_SESSION['rol']) || $_SESSION['rol'] != 'admin')
{
    header("Location: ../vista/login.php");
    exit();
}

$con = conectar();

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $nombre = $_POST['nombre_aspirante'];
    $apellidos = $_POST['apellidos_aspirante'];
    $email = $_POST['email_aspirante'];
    $password = $_POST['password_aspirante'];
    $telefono = $_POST['telefono_aspirante'];
    $ciudad = $_POST['ciudad_aspirante'];
    $colegio = $_POST['colegio_origen_aspirante'];

    $sql = "INSERT INTO Aspirante
    (
        nombre_aspirante,
        apellidos_aspirante,
        email_aspirante,
        password_aspirante,
        telefono_aspirante,
        ciudad_aspirante,
        colegio_origen_aspirante
    )
    VALUES
    (
        '$nombre',
        '$apellidos',
        '$email',
        '$password',
        '$telefono',
        '$ciudad',
        '$colegio'
    )";

    if(mysqli_query($con, $sql))
    {
        echo "<script>
                alert('Aspirante registrado correctamente');
                window.location='../vista/panel_admin.php';
            </script>";
    }
    else
    {
        echo "Error: ".mysqli_error($con);
    }
}
?>