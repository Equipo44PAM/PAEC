<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/consulta.css">
    <title>Consulta de registros</title>
</head>
<body>
    <nav>
        <ul class="menu">
            <li>
                <a href="#">Registros</a>
                <ul class="menu-after">
                    <li><a href="../trabajador/registro.php">Trabajador</a></li>
                    <li><a href="../alumnos/registro.php">Alumno</a></li>
                    <li><a href="../familiar/registro.php">Familiar</a></li>
                    <li><a href="../imc/registro.php">IMC</a></li>
                </ul>
            </li>
            <li><a href="../../index.html">Inicio</a></li>
            <li><a href="../../html/calculadora.html">Calculadora</a></li>
            <li><a href="../consulta/consultar.php">Consultas</a></li>
        </ul>
    </nav>

    <h1 class="title">Consulta de registros</h1>
    <div class="consult">
        <form method="post" action="">
            <label for="curp">Ingrese el CURP:</label>
            <input type="text" name="curp" id="curp" placeholder="Ingrese el CURP" required><br><br>
            <input type="submit" value="Consultar" name="consult">
        </form>
    </div>
    <div class="results">
    <?php
    include("evaluar.php");
    ?>
    </div>
</body>
</html>
