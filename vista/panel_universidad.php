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
    <title>Panel Universidad</title>
</head>
<body>

<h1>Bienvenido Universidad</h1>

</body>
</html>