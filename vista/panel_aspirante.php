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
    <title>Panel Aspirante</title>
</head>
<body>

<h1>Bienvenido Aspirante</h1>

</body>
</html>