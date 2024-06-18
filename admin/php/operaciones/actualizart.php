<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../../login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar o borrar datos</title>
    <link rel="stylesheet" href="../../CSS/actualizar.css">
</head>
<body>
    <form action="tablas.php" method="post">
        <h1>Actualizar o borrar datos</h1>
        <input type="text" name="curp" id="curp" placeholder="Ingresa el CURP" required>
        <input type="submit" value="Enviar" name="consultar">
        <input type="reset" value="Borrar">
    </form>
    <button onclick="location.href='../../administrar.php'">Regresar</button>
</body>
</html>
