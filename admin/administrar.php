<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/admin.css">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();

    if (!isset($_SESSION['usuario'])) {
        header("Location: login.html");
        exit;
    }
    ?>

    <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?></h1>

    <div class="options">
        <p class="select">¿Desea borrar/actualizar una tabla?</p>
        <button class="option-button" onclick="location.href='php/operaciones/actualizart.php'"><span>Borrar | Actualizar</span></button>
    </div>

    <h2 class="title">Encontrar un CURP</h2>
    <div class="consult">
        <form method="post" action="">
            <label for="curp">Ingrese el CURP:</label>
            <input type="text" name="curp" id="curp" placeholder="Ingrese el CURP" required><br><br>
            <input type="submit" value="Consultar" name="consult">
        </form>
    </div>

    <div class="results">
        <?php
        include("php/consultaadmin.php");
        ?>
    </div>

    <form action="php/cierrasesion.php" method="post">
        <button type="submit" class="logout-button">Cierra Sesión</button>
    </form>
</body>
</html>
