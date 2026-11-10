<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login IntoUni</title>
</head>
<body>

    <h1>IntoUni</h1>

    <form action="../controlador/login_controlador.php" method="POST">

        <label>Correo:</label><br>
        <input type="email" name="email" required>
        <br><br>

        <label>Contraseña:</label><br>
        <input type="password" name="password" required>
        <br><br>

        <input type="submit" value="Iniciar sesión">

    </form>

</body>
</html>