<?php

require_once("../config/conexion.php");

session_start();

if(!isset($_SESSION['rol']) || $_SESSION['rol'] != 'admin')
{
    header("Location: ../vista/login.php");
    exit();
}

$con = conectar();

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $nombre = $_POST['nombre_universidad'];
    $ciudad = $_POST['ciudad_universidad'];
    $departamento = $_POST['departamento_universidad'];
    $tipo = $_POST['tipo_universidad'];
    $pagina = $_POST['pagina_web'];
    $email = $_POST['email_universidad'];
    $password = $_POST['password_universidad'];

    $sql = "INSERT INTO Universidad
    (
        nombre_universidad,
        ciudad_universidad,
        departamento_universidad,
        tipo_universidad,
        pagina_web,
        email_universidad,
        password_universidad
    )
    VALUES
    (
        '$nombre',
        '$ciudad',
        '$departamento',
        '$tipo',
        '$pagina',
        '$email',
        '$password'
    )";

    if(mysqli_query($con, $sql))
    {
        echo "<script>
                alert('Universidad registrada correctamente');
                window.location='../vista/panel_admin.php';
            </script>";
    }
    else
    {
        echo "Error: " . mysqli_error($con);
    }
}

?>